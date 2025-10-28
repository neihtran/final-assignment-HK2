@extends('layout')

@section('content')
<div style="max-width:700px;margin:40px auto;text-align:center;font-family: Arial, sans-serif;">
    <h2>Thanh toán Online - Quét QR để thanh toán</h2>
    <p>Mã đơn hàng: <strong>{{ $order_code }}</strong></p>
    <div style="margin:20px 0;">
        {{-- Use DNS2D to render QR for the confirm URL --}}
        {!! DNS2D::getBarcodeHTML($confirmUrl, 'QRCODE') !!}
    </div>
    <p>Quét mã QR bằng ứng dụng ngân hàng để hoàn tất thanh toán.</p>
    <p>Nếu QR không hoạt động, bấm vào link bên dưới để xác nhận (giả lập quét):</p>
    <p><a href="{{ $confirmUrl }}" class="btn btn-primary">Xác nhận thanh toán (thay cho quét QR)</a></p>
    <p style="margin-top:24px;color:#666;font-size:13px">Lưu ý: Đây là luồng QR nội bộ, scan QR sẽ gọi đường dẫn xác nhận để hoàn thành đơn.</p>
</div>
@endsection
