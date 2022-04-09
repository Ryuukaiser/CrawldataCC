@extends('layouts.master-2')
@section('title','Chapter')
@section('content')
<div class="section section-chapter">
        <div class="container">
            <div class="chapter-header">
                <div class="row">
                    <div class="col-md-3 col-xs-4" >
                    @if(empty($prevchap->id))
                        <button  type="submit" class="btn btn-primary" style="background-color: red; color:black; float:right;" disabled>Chap trước</button>
                    @else
                         <button onclick="window.location.href='/truyen/{{$truyen->id}}/{{$prevchap->id}}'"  type="submit" class="btn btn-primary" style="background-color: red; color:black; float:right;">Chap trước</button>
                    @endif   
                    </div> 
                    <div class="col-md-6 col-xs-4">
                        <select class="form-control" onchange="location = this.value;">
                            <Option> 
                                <a href="#" >{{$chap->name}}</a>
                            </Option>
                             @foreach($otherchaps as $value)
                                <Option value="/truyen/{{$truyen->id}}/{{$value->id}}"> 
                                    {{$value->name}}
                                </Option>
                             @endforeach 
                        </select>
                    </div> 
                    <div class="col-md-3 col-xs-2 ">
                        @if(empty($nextchap->id))
                            <button type="submit" class="btn btn-primary" style="background-color: red; color:black;" disabled >Chap sau</button>
                        @else
                            <button onclick="window.location.href='/truyen/{{$truyen->id}}/{{$nextchap->id}}'"type="submit" class="btn btn-primary" style="background-color: red; color:black;">Chap sau</button>
                        @endif    
                    </div> 

                </div> 
         </div>  
         <div class="chapter-body">   
            <p style="text-align:left;">
                 {{$chap->content}}
            </p>
        </div>
   
    <div class="chapter-footer">    
             <div class="row">
                    <div class="col-md-3 col-xs-4" >
                    @if(empty($prevchap->id))
                        <button  type="submit" class="btn btn-primary" style="background-color: red; color:black; float:right;" disabled>Chap trước</button>
                    @else
                         <button onclick="window.location.href='/truyen/{{$truyen->id}}/{{$prevchap->id}}'"  type="submit" class="btn btn-primary" style="background-color: red; color:black; float:right;">Chap trước</button>
                    @endif   
                    </div> 
                    <div class="col-md-6 col-xs-4">
                        <select class="form-control" onchange="location = this.value;">
                            <Option> 
                                <a href="#" >{{$chap->name}}</a>
                            </Option>
                             @foreach($otherchaps as $value)
                                <Option value="/truyen/{{$truyen->id}}/{{$value->id}}"> 
                                    {{$value->name}}
                                </Option>
                             @endforeach 
                        </select>
                    </div> 
                    <div class="col-md-3 col-xs-2 ">
                        @if(empty($nextchap->id))
                            <button type="submit" class="btn btn-primary" style="background-color: red; color:black;" disabled >Chap sau</button>
                        @else
                            <button onclick="window.location.href='/truyen/{{$truyen->id}}/{{$nextchap->id}}'"type="submit" class="btn btn-primary" style="background-color: red; color:black;">Chap sau</button>
                        @endif    
                    </div> 

            </div> 
    </div>
</div>
@endsection