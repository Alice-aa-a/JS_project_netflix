    div class=content">
    <H1> Produit</H1>
    <strong> {{$product->name}} </strong>
    <p> {{$product->description}} </p>
    <p> {{$product->price}} € </p>
    <img src="{{public_path($product->image}}" alt="" width="200"/>
    </div>
