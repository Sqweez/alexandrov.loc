@extends('layouts.profile')
@section('content')
    <div class="wrapper container-fluid" >
        {{ Form::model($discount, array('route' => array('discounts.update', $discount->id), 'method' => 'put')) }}
        {{ Form::hidden('id', $discount->id) }}
        <div class="form-group">
            {!! Form::label('discount_short_desc', 'Краткое описание скидки') !!}
            <div class="col-xs-8">
                {!! Form::textarea('discount_short_desc', $discount->discount_short_desc, ['class' => 'form-control', 'placeholder' => 'Краткое описание скидки']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('discount_percent', 'Процент скидки') !!}
            <div class="col-xs-8">
                {!! Form::text('discount_percent', $discount->discount_percent, ['class' => 'form-control', 'placeholder' => 'Процент скидки']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('discount_condition', 'Введите условие')!!}
            <div class="col-xs-8">
                {!! Form::textarea('discount_condition', $discount->discount_condition, ['class' => 'form-control', 'placeholder' => 'Введите условие']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('discount_description', 'Полное описание') !!}
            <div class="col-xs-8">
                {!! Form::textarea('discount_description', $discount->discount_description, ['class' => 'form-control', 'placeholder' => 'Полное описание']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('discount_image', 'Изображение') !!}
            <div class="col-xs-8">
                {!! Form::image('images/m_desc/' . $discount->discount_image, '', ['width' => '100px']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('discount_image', 'Изображение') !!}
            <div class="col-xs-8">
                {!! Form::file('discount_image', old('discount_image'), ['class' => 'form-control', 'placeholder' => 'Изображение']) !!}
            </div>
        </div>
       <div class="row" style="padding-left: 20px; padding-right: 20px">
            <div class="form-group">
                {!! Form::label('category_id', 'Выберите категорию') !!}
                <div class="col-xs-4">
                    {!! Form::select('category_id', $category, $discount->category->name, ['id' => 'category_id', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div id="sub_select" class="form-group">
                {!! Form::label('subcategory_id', 'Выберите подкатегорию') !!}
                <div class="col-xs-8">
                    <select id="subcategory_id" name="subcategory_id" class="form-control"></select>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#category_id').on('change', function () {
                var id = this.value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('ajaxSubCat') }}",
                    data: {
                        'id': id
                    },
                    success: function(result){
                        if($(result.data).length > 0){
                            var HtmlSelect ='';
                            for (var name in result.data){
                                HtmlSelect +=   '<option value="'+ name +'">'+ result.data[name] +'</option>';
                            }
                            $('#sub_select').css('visibility', 'visible');
                            $('#subcategory_id').html(HtmlSelect).css('visibility','visible');
                        }
                        else{
                            $('#sub_select').css('visibility', 'hidden');
                            $('#subcategory_id').css('visibility','hidden');
                        }
                    }
                })
            })
        </script>
      <div class="form-group">
            {!! Form::label('shop', 'Выберите магазин') !!}
            <div class="col-xs-8">
                {!! Form::select('shop_id', $shops, $discount->shop->shop_name, ['id' => 'shop_id', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
            </div>
        </div>
        {{Form::close()}}
    </div>
@endsection