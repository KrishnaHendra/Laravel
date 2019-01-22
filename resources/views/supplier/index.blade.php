
@foreach ($supplier as $supplierlist)
    {{ $supplierlist->supplier_id}}
    <p style="color: #ff0000;"> {{ $supplierlist->supplier_name}}</p>
    <p style="color: green;"> {{ $supplierlist->supplier_address}}}</p>

    <br />
@endforeach