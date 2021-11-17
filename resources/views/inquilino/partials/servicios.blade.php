<table class="table">
    <thead>
        <tr>
            <th scope="col">Servicio</th>
            <th scope="col">Descripción</th>
            <th scope="col">Costo Por Vivienda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $total=0;
            
        ?>
        @foreach ($servicios as $servicio)
        <tr>
            <td>{{$servicio->nombre}}</td>
            <td>{{$servicio->descripcion}}</td>

            <td>${{$costo = number_format(($servicio->costo)/$numInquilinos,2)}}</td>

            <?php
                $total=($servicio->costo)/$numInquilinos;
            ?>
        </tr>
        @endforeach

        <tr>
            <td></td>
            <td></td>
            <td>${{number_format($total,2)}}</td>
        </tr>
    </tbody>
</table>