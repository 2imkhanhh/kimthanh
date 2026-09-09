<!DOCTYPE html>
<html>
<head>
    <title>Có liên hệ mới từ website</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <h2 style="color: #28a745; border-bottom: 2px solid #28a745; padding-bottom: 10px;">Có liên hệ mới từ website</h2>
        
        <p>Xin chào quản trị viên,</p>
        <p>Bạn vừa nhận được một liên hệ mới từ website với các thông tin sau:</p>

        <ul style="list-style: none; padding: 0;">
            <li style="margin-bottom: 10px;"><strong>Họ tên:</strong> {{ $contact->fullname }}</li>
            <li style="margin-bottom: 10px;"><strong>Email:</strong> {{ $contact->email }}</li>
            <li style="margin-bottom: 10px;"><strong>Số điện thoại:</strong> {{ $contact->phone ?? 'Không có' }}</li>
            <li style="margin-bottom: 10px;"><strong>Thời gian gửi:</strong> {{ $contact->created_at->format('d/m/Y H:i:s') }}</li>
        </ul>

        <div style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #28a745; margin-top: 20px;">
            <h4 style="margin-top: 0;">Nội dung liên hệ:</h4>
            <p style="white-space: pre-line; margin-bottom: 0;">{{ $contact->content }}</p>
        </div>

        <p style="margin-top: 30px; font-size: 0.9em; color: #777;">Email này được tự động gửi từ hệ thống website. Vui lòng không trả lời trực tiếp email này nếu đây là email tự động.</p>
    </div>
</body>
</html>
