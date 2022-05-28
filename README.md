# Quản lý đăng ký tiêm chủng Vaccine
## Document phần BE chưa làm FE
[Xem ngay](https://docs.google.com/document/d/1h6ixi2l5yIgIwG6jozaSH7Mc_EG7Ks4JCFieQl6qO0Y/edit?usp=sharing)
## Vì thanh niên thuê làm BE nhưng bùng tiền nên share
Infor thanh niên đấy
- Họ tên : Lê Văn Lĩnh
- Facebook : [Lê Văn Lĩnh](https://www.facebook.com/100055965995110)
- Avatar:
![Caption for the picture.](https://cover-talk.zadn.vn/8/e/c/5/8/45f9ee76af0d7ff2562dc43986230e30.jpg)


## Cài đặt
- Tạo database tên `vaccine_covid` và import file `vaccine_covid.sql`.
- Vào `app\config\Database.php` thay đổi thông tin `hostname`, `username` và `password` theo database của bạn.
- Chạy file `Run.bat` để chạy chương trình. Hoặc sử dụng câu lệnh `php spark serve` trên Command Line (cmd). Port mặc định là 8080, nếu bạn muốn thay đổi có thể mở file `app\config\App.php` và thay đổi Port trong biến `$baseURL`. Hoặc bạn có thể sử dụng câu lệnh `php spark serve --port <PORT>` trực tiếp mà không cần config lại.
- Truy cập `localhost:8080` hoặc `localhost:<PORT>` nếu thay PORT để truy cập trang.