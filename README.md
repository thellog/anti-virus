#1. Git push
1.1.Cập nhập code trên remote:
- Chuyển sang nhánh master              : git checkout master
- Pull code                             : git pull master origin
- Chuyển sang nhánh đang làm việc       : git checkout ten_nhanh
- Merge code với nhánh master           : git merge master
1.2.Thêm file, tạo một commit và push:
- Thêm cách file đã làm việc            : git add . hoặc < git add tên_file > nếu muốn chỉ định file muốn add
- Tạo một commit                        : git commit -m "lời nhắn"
- Push code lên nhánh remote của mình   : git push origin ten_nhanh

#2. Relationship
Thêm quan hệ bảng news và category,

Models: News-> category(). 

#3. Upload ảnh
Tạo một symbolic link giữa storage và public để load ảnh
< php artisan storage:link >

# Upload giao diện mới
- Các folder của template ở public/frontend/...

# Update gitignore
.
.
