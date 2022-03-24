<?php

namespace App\Console\Commands;

use GuzzleHttp\Promise\Create;
use Illuminate\Console\Command;
use App\truyen;
use Illuminate\Support\Facades\DB;
use Weidner\Goutte\GoutteFacade;

class ScrapeTruyen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:truyen';

    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $crawler = GoutteFacade::request('GET', 'https://truyenfull.vn/danh-sach/truyen-full/');
        $linkPost = $crawler->filter('h3.truyen-title a')->each(function ($node) {
            return $node->attr("href");
        });
       
        foreach ($linkPost as $link) {
           
             $this->scrapeData($link);
 
        }

    }
    public function scrapeData($url){
    
          
            $crawler = GoutteFacade::request('GET', $url);
            $name = $this -> crawlData('h3.title', $crawler);
            $author = $this ->crawlData('div.info a',$crawler);
            $description =  $this -> crawlData('div.desc-text', $crawler);                      
            
            $truyen = new truyen();
            $truyen->name = $name;
            $truyen->author = $author;
            $truyen->description = $description;
            $truyen->link = $url ;
           
    }

    protected function crawlData(string $type, $crawler)
    {
        $result = $crawler->filter($type)->each(function ($node) {
            return $node->text();
        });

        if(!empty($result)) {
            return $result[0];
        }

        return '';
    }
}
