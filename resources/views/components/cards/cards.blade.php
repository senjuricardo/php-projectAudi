<div class="container pt-5">
    <div class="row">
        @for($i=0;$i<3;$i++)
        <div class="col-4">
            @component('components.card.card',
             [
                  'image' => $images[$i],

                  'title'=> "Card tittle",
                  'desc'=> "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ",
            ])
            @endcomponent
        </div>
        @endfor
    </div>
</div>
