@extends('app.layouts.base_adm')

@section('estilo')
@endsection

@section('conteudo')
<div class="container-fluid">
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">{{$titulo}}</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li>{{$slug}}</li>
        </ul>
    </div>
    <div class="row">
        <!-- Your Profile Views Chart -->
        <div class="col-lg-12 m-b30">
            <div class="widget-box">
                <div class="email-wrapper">
                    @component('mensagens.components.email_menu_bar')
                    @endcomponent
                    <div class="mail-list-container">

                        <form class="mail-compose">
                            <div class="form-group col-12">
                                <input class="form-control" type="email" placeholder="Para">
                            </div>
                            <div class="form-group col-12">
                                <input class="form-control" type="email" placeholder="CC">
                            </div>
                            <div class="form-group col-12">
                                <input class="form-control" type="text" placeholder="Assunto">
                            </div>
                            {{-- <div class="form-group col-12">
                                <div class="summernote"><p>Olá</p></div>
                            </div> --}}
                            <div class="form-group col-12">
                                <textarea name="mensagem" id="" cols="70" rows="10"></textarea>
                                {{-- <input type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple> --}}
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-lg">Enviar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Your Profile Views Chart END-->
    </div>
</div>
@endsection

@section('script')
@endsection
