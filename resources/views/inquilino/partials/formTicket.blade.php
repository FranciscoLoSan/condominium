<form role="form" id="main-form" autocomplete="off" method="POST" action="{{route('pago.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Enviar Imagen Del Ticket</label>
        <input class="form-control" name="ticket" type="file" id="formFile">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>