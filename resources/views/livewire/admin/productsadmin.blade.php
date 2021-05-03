<div class="container-fluid">
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Apri Sidebar</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </nav>
        <div class="container-fluid">
            
            <div class="row justify-content-center">
                <h1 class="mt-4">PRODOTTI</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 border">
                    <h4>Prodotti Totali</h4>
                    <p>{{$products->count()}}</p>
                </div>
                <div class="col-md-4">
                    <h4>Prodotti nuovi</h4>
                </div>
                <div class="col-md-4">
                    <h4>Prodotti Totali</h4>
                </div>
            </div>

            <div class="row">
            <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Azienda</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->manufacturer }}</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                    @endforeach                   

                </tbody>
            </table>
            </div>
            </div>
            
        </div>
    </div>
</div>
