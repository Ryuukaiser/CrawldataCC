<?php

namespace App\Console\Commands;

use GuzzleHttp\Promise\Create;
use Illuminate\Console\Command;
use App\truyen;
use App\chapter;
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
           
            $this->scrapeDataTruyen($link);
 
        }

    }
    public function scrapeDataTruyen($url){
    
            /** đào dữ liệu trên trang truyện */
            $crawler = GoutteFacade::request('GET', $url);
            $name = $this -> crawlData('h3.title', $crawler);
            $image =  $crawler->filter('div.book img')->eq(0)->attr('src');
            $author = $this ->crawlData('div.info a',$crawler);
            $description =  $this -> crawlData('div.desc-text', $crawler);  
            $truyen = new truyen();
            $truyen->name = $name;
            $truyen->image= $image;          
            $truyen->author = $author;
            $truyen->description = $description;
            $truyen->link = $url;
            $truyen->save();  

            $linkPost = $crawler->filter('ul.list-chapter a')->each(function ($node) {
                return $node->attr("href");
            });    
            foreach ($linkPost as $link) {
                       
                $this->scrapeDataChapter($link);
             
             }                    
            
            
            
            
           
    }

    public function scrapeDataChapter($url){
    
          
        $crawler = GoutteFacade::request('GET', $url);
        $name = $this ->crawlData('a.chapter-title', $crawler);
        $nametruyen = $this->crawlData('a.truyen-title' , $crawler);  
        $content  = $this ->crawlData('div.chapter-c ', $crawler);
        $data = DB::table('truyen')->select('*')->get();
        $chapter = new chapter();        
        $chapter->name = $name;
        $chapter->link = $url;
        $chapter->content = $content;
        foreach($data as $value)
        {
            if($nametruyen==$value->name)
            {
                 $chapter->idtruyen = $value->id;
            }
        }
        $chapter->save();

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
