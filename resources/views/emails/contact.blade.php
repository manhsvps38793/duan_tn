<h2>Thông tin liên hệ</h2>
<p><strong>Họ và Tên:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
@if(!empty($data['phone']))
<p><strong>Số điện thoại:</strong> {{ $data['phone'] }}</p>
@endif
@if(!empty($data['subject']))
<p><strong>Chủ đề:</strong> {{ $data['subject'] }}</p>
@endif
<p><strong>Nội dung:</strong></p>
<p>{{ $data['message'] }}</p>
