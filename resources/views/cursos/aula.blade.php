@extends('cursos.layouts.base_cursos')


@section('estilo')

@endsection


@section('conteudo')

<div class="container">
    <h3><?php echo $titulo ?></h3>
    <div class="">
        <div style="position: relative; height: 0; padding-bottom: 56.2%; padding-top: 0;">
            <iframe style="position: absolute !important; width: 100% !important; height: 100% !important; z-index: 100"
            src="https://www.youtube.com/embed/IaNlB_dboAU?enablejsapi=0&amp;autoplay=0&amp;modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent&amp;enablejsapi=0" frameborder="0" allowfullscreen="1">
            </iframe>
        </div>
    </div>
</div>

@endsection


@section('script')

@endsection
