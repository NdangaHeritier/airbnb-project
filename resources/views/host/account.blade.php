@extends('host.layout')

@section('body')

<div class="row container p-5">
    @if(Session::has('message'))
        <div class="alert alert-success"><i class="fa fa-exclamation-circle me-3"></i>{{Session::get('message')}}</div>
    @endif
            <div class="p-2 d-sm-flex border rounded border-bottom-0">
                <div class="px-2">
                    <i class="fa fa-user-edit text-muted"></i>
                </div>
                <div class="text-muted">Edit your profiles.</div>
            </div>
                <div class=" border rounded d-sm-flex border-top-0">
                        <div class="profile p-3 border-end border-top">
                            <img src="/profiles/{{Session::get('LoginId')->profile_pic}}" alt="" class="ms-2 rounded-circle border" height="80" width="80">
                            <div class="p-3 h6 border-bottom">
                                {{ucwords(Session('LoginId')->fullname)}}
                            </div>
                            @if(Session::has('places'))
                            <div class="small text-muted text-center">
                                <span class="small">With {{count(Session::get('places'))}} listings.</span>
                            </div>
                            @else
                            <a class="small text-muted text-center">
                                <span href="{{url('/host')}}" class="small">manage listings.</span>
                            </a>
                            @endif
                        </div>
                        <form action="{{url('/login/' . Session::get('LoginId')->id)}}" enctype="multipart/form-data" method="post" class="p-3 d-sm-flex">
                            {!! csrf_field() !!}
                            @method('PATCH')
                            <div>
                                <input type="text" class="form-control border rounded mx-2" name="fullname" value="{{Session('LoginId')->fullname}}">
                                <span class="text-danger p-2">@error('fullname') {{$message}} @enderror</span>
                                <div class="input-group py-2 px-2">
                                    <label for="pic" class="input-group-text" role="button">
        
                                        <div id="filename" class="p-2 text-center text-muted"><i class="fa fa-cloud-upload fs-1"></i><br>change photo.</div>
                                    </label>
                                    <input type="file" id="pic" class="form-control border rounded d-none" name="profile_pic" value="{{Session('LoginId')->profile_pic}}" oninput="document.getElementById('filename').innerHTML=`<i class='fa fa-check text-success me-2'></i>`+this.value.substr(12)">
                                </div>
                            </div>
                            <div class="px-4 pt-5">
                                <button type="submit" class="btn btn-danger rounded-pill mt-5">
                                    <i class="fa fa-save px-3"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

@endsection