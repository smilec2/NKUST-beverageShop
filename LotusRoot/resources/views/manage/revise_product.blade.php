@extends("layout.main")

@section("content")

<article id="manage-product-admin-page" class="py-7">
	<div class="container">
		<!-- 區塊標題 -->
		<div class="text-center section-title mb-5">
			<h2>商品管理</h2>
		</div>
		<!-- 商品管理表格 -->
		<div class="row justify-content-center text-center">
			<div class="col-lg-10 col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead class="table-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">圖片</th>
								<th scope="col">商品名稱</th>
								<th scope="col">描述</th>
								<th scope="col">價格</th>
								<th scope="col">分類</th>
								<th scope="col">甜度調整</th>
								<th scope="col">操作</th>
							</tr>
						</thead>
						<tbody class="align-middle">
							@foreach($products as $product)
							<tr 
								class="edit_product_item"
								data-id="{{$product->id}}"
								data-product_name="{{$product->product_name}}"
								data-description="{{$product->description}}"
								data-price="{{$product->price}}"
								data-image_url="{{ asset('storage/' . $product->image_url) }}"
								data-category_id="{{$product->category_id}}"
								data-has_sugar="{{$product->has_sugar}}">

								<th scope="row">{{$product->id}}</th>
								<td class="col-xl-3 col-md-3 col-4 me-2">
									<img
										src="{{ asset('storage/' . $product->image_url) }}"
										alt="手熬薏仁湯"
										class="img-thumbnail"
										width="100" />
								</td>
								<td>{{$product->product_name}}</td>
								<td>{{$product->description}}</td>
								<td>{{$product->price}}</td>
								<td>
									@if ($product->category_id == 1)
									有料
									@elseif ($product->category_id == 2)
									茶類
									@elseif ($product->category_id == 3)
									奶類
									@else ($product->category_id == 4)
									其他
									@endif
								</td>
								<td> @if ($product->has_sugar == 1)
									有
									@else ($product->has_sugar == 0)
									沒有
									@endif
								</td>
								<td>
									<button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editProductModal">編輯</button>
									<button class="btn btn-danger btn-sm">刪除</button>
								</td>
							</tr>
							<!-- 更多商品列 -->
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- 新增商品按鈕 -->
				<div class="text-end">
					<button
						class="btn btn-success"
						data-bs-toggle="modal"
						data-bs-target="#addProductModal">
						新增商品
					</button>
				</div>
			</div>
		</div>
	</div>
</article>
<!-- 編輯商品Modal -->
<div
	class="modal fade"
	id="editProductModal"
	tabindex="-1"
	aria-labelledby="editProductModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editProductModalLabel">編輯商品</h5>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" method="post" enctype="multipart/form-data">
					@csrf
					<div class="mb-3">
						<label for="product_name" class="form-label">商品名稱</label>
						<input
							type="text"
							class="form-control"
							id="edit_product_name"
							name="product_name"
							required />
					</div>
					<div class="mb-3">
						<label for="description" class="form-label">商品描述</label>
						<input
							type="text"
							class="form-control"
							id="edit_description"
							name="description"
							required />
					</div>
					<div class="mb-3">
						<label for="price" class="form-label">價格</label>
						<input
							type="number"
							class="form-control"
							id="edit_price"
							name="price"
							required />
					</div>
					<!-- 顯示舊圖片 -->
					<div class="mb-3 img-thumbnail" width="100">
						<img id="product_image_preview" src="">
					</div>
					<div class="mb-3">
						<label for="image" class="form-label">圖片</label>
						<input
							type="file"
							class="form-control"
							id="edit_image"
							name="image_url"
							required />
					</div>
					<div class="mb-3">
						<label for="category" class="form-label">分類</label>
						<select class="form-select" id="edit_category" name="category_id" required>
							<option value="1">有料</option>
							<option value="2">茶類</option>
							<option value="3">奶類</option>
							<option value="4">其他</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="has_sugar" class="form-label">是否調整甜度</label>
						<select class="form-select" id="edit_has_sugar" name="has_sugar" required>
							<option value="1">有</option>
							<option value="0">沒有</option>
						</select>
					</div>
					<button type="submit" class="btn btn-danger">儲存</button>
					<!-- <button type="reset" class="btn btn-secondary">清除</button> -->
				</form>
			</div>
		</div>
	</div>
</div>


@include("component.create_product")

@endsection