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
							<tr>
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
									<button class="btn btn-primary btn-sm">編輯</button>
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


@include("component.create_product")


</html>
@endsection