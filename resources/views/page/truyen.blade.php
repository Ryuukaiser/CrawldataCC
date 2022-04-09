@extends('layouts.master-2')
@section('title','Truyện')
@section('content')
 <!-- section list -->
 <div class="section section-item ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-3  col-xs-12">
                                    <div class="image-cover">
                                        <img alt="..." class="item-image" style="margin-top:10px;" src="{{$truyen->image}}" />
                                    </div>
                            </div>
                                <div class="col-md-9  col-xs-12">
                                    <div class="comic ">
                                        <h2 class="title" style="text-align:left">{{$truyen->name}}</h2>
                                        <div class="comic-info">
                                            <div class="row">
                                                <label style="margin-left: 10px;">Tác giả:</label>
                                                <a href="#">{{$truyen->author}}</a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>

                        </div> 
                    <div class="item-decription">
                        <h2>Mô tả</h2>
                        <p> {{$truyen->description}}</p>
                    </div>
                 
                </div>
                <br>
                <div class="box">
                    <table class=" table chap-info">
                        <thead>
                            <tr>
                                <th>Tên chap</th>
                                <th style="float:right;"> Ngày đăng</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($chaps as $chap)
                            <tr>
                                <td>
                                    <a href="/truyen/{{$truyen->id}}/{{$chap->id}}">{{$chap->name}}</a>
                                </td>
                                <td style="float:right;">{{$chap->updated_at}}</td>
                            
                            </tr>  
                     @endforeach                             
                        </tbody>
                    </table>
                    {{$chaps->links()}}  
                </div>
                    
                </div>


            </div>
        </div>
    </div>
@endsection