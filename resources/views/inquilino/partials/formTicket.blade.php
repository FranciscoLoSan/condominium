<div class="row g-3">

    @if ($pago)
        @if ($pago->estatus!=1)
            <form role="form" id="main-form" class="col-md-6" autocomplete="off" method="POST" action="{{route('pago.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="monto" value="{{number_format($total,2)}}">
                    <label for="formFile" class="form-label">Enviar Imagen Del Ticket</label>
                    <input class="form-control" name="ticket" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        @endif
    @else
        <form role="form" id="main-form" class="col-md-6" autocomplete="off" method="POST" action="{{route('pago.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Enviar Imagen Del Ticket</label>
                <input class="form-control" name="ticket" type="file" id="formFile">
            </div>
            <input type="hidden" class="form-control" name="monto" value="{{$total}}">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @endif

    @if ($pago)
        <div class="col-md-6">
            <img src="{{asset('storage').'/'.$pago->ticket}}" style="width: 100%;">
        </div>  
    @endif
</div>