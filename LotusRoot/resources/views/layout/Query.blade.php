@extends('layout.main')

@section("content")

<article id="search-purchase-record" class="py-7">
    <div class="container">
        <div class="text-center section-title mb-5">
            <h2>查詢購買紀錄</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="px-4 py-3 text-darkred h5">

                <form id="searchPurchaseForm" action="{{ route('user.auth.testpost') }}" method="post" enctype="multipart/form-data" class="p-3">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">選擇購買人</label>
                        <select class="form-control" id="username" name="username" required>
                            <option value="">請選擇購買人</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('username') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                     @if($errors->has('start_date'))
                        <div class="text-danger">
                            @foreach($errors->get('start_date') as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                        <div class="mb-3">
                            <label for="start_date" class="form-label">開始日期</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', '') }}" />
                        </div>
                    @if($errors->has('end_date'))
                        <div class="text-danger">
                            @foreach($errors->get('end_date') as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                        <div class="mb-3">
                            <label for="end_date" class="form-label">結束日期</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', '') }}" />
                        </div>
                    @isset($orders)
                    @if ($orders->isEmpty())
                        <div class="mb-3">
                            <p>沒有符合的購買紀錄。</p>
                        </div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>訂單編號</th>
                                    <th>購買人</th>
                                    <th>總金額</th>
                                    <th>狀態</th>
                                    <th>訂單日期</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    @endisset

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-danger">查詢購買紀錄</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</article>






@endsection


