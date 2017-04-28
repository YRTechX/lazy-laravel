@extends('layouts.app')<!--views/layouts/app.blade.php-->
@section('content')

<!-- Bootstrap шаблон... -->
 @if (count($products) > 0)
<div class="container">

    <div class="panel-body">
        <table class="table table-striped task-table">
	    <!-- Заголовок таблицы -->
	    <thead>
	    <th>Name</th>
	    <th>Price</th>
            <th>Action</th>
	    <th>&nbsp;</th>
	    </thead>
	    <!-- Тело таблицы -->
	    <tbody>
		@foreach ($products as $product)
		<tr>

		    <!-- Имя задачи -->
		    <td class="table-text">
			<div>{{ $product->name }}</div>
		    </td>
		    <td class="table-text">
			<div>{{ $product->price }}</div>
		    </td>
		    <td>
			<form action="{{ url('products/'.$product->id) }}" method="POST">
			    {{ csrf_field() }}
			    {{ method_field('DELETE') }}

			    <button type="submit" class="btn btn-danger">
				<i class="fa fa-trash"></i> Удалить
			    </button>
			</form>
		    </td>
		    <td>
			<div class="description">{{ $product->description }}</div>

		    </td>
		</tr>
		@endforeach
	    </tbody>
        </table>
    </div>
    @endif
@endsection
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')


   
    <div class="panel panel-default">
	<div class="panel-heading">Add product</div>
	<!-- Форма новой задачи -->
	<form action="{{ url('products') }}" method="POST" class="form-horizontal">
	    {{ csrf_field() }}

	    <!-- Имя задачи -->
	    <div class="form-group">
		<label for="task" class="col-sm-3 control-label">Name:</label>

		<div class="col-sm-6">
		    <input type="text" name="name" id="product-name" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label for="task" class="col-sm-3 control-label">Description:</label>

		<div class="col-sm-6">
		    <input type="text" name="description" id="product-description" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label for="task" class="col-sm-3 control-label">Price:</label>

		<div class="col-sm-6">
		    <input type="number" name="price" id="product-price" class="form-control">
		</div>
	    </div>

	    <!-- Кнопка добавления задачи -->
	    <div class="form-group">
		<div class="col-sm-offset-3 col-sm-6">
		    <button type="submit" class="btn btn-default">
			<i class="fa fa-plus"></i> Add
		    </button>
		</div>
	    </div>
	</form>
    </div>
</div>
