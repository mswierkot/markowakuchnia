<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nazwa dania:</strong>
           
            {!! Form::text('title', null, array('placeholder' => 'Tytuł','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sposób przygotowania:</strong>
            {!! Form::textarea('body', null, array('placeholder' => 'Treść','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Lista składników:</strong>
            {!! Form::textarea('lista', null, array('placeholder' => 'Treść','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
              <strong>Kategoria:</strong>
            {!! Form::text('category', null, array('placeholder' => 'sniadanie, kolacja, deser, pozostale','class' => 'form-control' )) !!}
               
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Zdjęcie głowne:</strong>
            {!! Form::text('sciezka', null, array('placeholder' => 'Główne zdjęcie','class' => 'form-control' )) !!}
        </div>
    </div>
      
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Miniatura:</strong>
            {!! Form::text('miniatura1', null, array('placeholder' => 'Miniatura pierwsza','class' => 'form-control' )) !!}
        </div>
    </div>
       
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
              <strong>Miniatura:</strong>
            {!! Form::text('miniatura2', null, array('placeholder' => 'Miniatura druga','class' => 'form-control' )) !!}
        </div>
    </div>
       
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
              <strong>Miniatura:</strong>
            {!! Form::text('miniatura3', null, array('placeholder' => 'Miniatura trzecia','class' => 'form-control' )) !!}
        </div>
    </div>
         
   
    
    
    
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Zatwierdź</button>
    </div>
</div>