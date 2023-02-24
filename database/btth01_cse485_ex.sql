-- a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,baiviet.ma_tloai,baiviet.tomtat,baiviet.noidung,baiviet.ma_tgia,baiviet.ngayviet,baiviet.hinhanh 
FROM baiviet,theloai where baiviet.ma_tloai=theloai.ma_tloai and ten_tloai='Nhạc trữ tình'; 
-- b. Liệt kê các bài viết của tác giả “Nhacvietplus” 
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,baiviet.ma_tloai,baiviet.tomtat,baiviet.noidung,baiviet.ma_tgia,baiviet.ngayviet,baiviet.hinhanh 
FROM baiviet, tacgia WHERE baiviet.ma_tgia=tacgia.ma_tgia and ten_tgia='Nhacvietplus';


-- c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. 
SELECT theloai.ma_tloai,theloai.ten_tloai FROM baiviet,theloai WHERE baiviet.ma_tloai=theloai.ma_tloai and baiviet.noidung=''; 

-- d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết. 
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai,baiviet.ngayviet FROM baiviet,tacgia,theloai WHERE baiviet.ma_tgia=tacgia.ma_tgia and baiviet.ma_tloai=theloai.ma_tloai; 

-- e. Tìm thể loại có số bài viết nhiều nhất
SELECT theloai.ma_tloai,theloai.ten_tloai from baiviet,theloai WHERE baiviet.ma_tloai=theloai.ma_tloai;

--f.Liệt kê 2 tác giả có số bài viết nhiều nhất 
SELECT   tacgia.ten_tgia,count(baiviet.ma_tgia)   from baiviet,tacgia WHERE tacgia.ma_tgia = baiviet.ma_tgiaGROUP BY tacgia.ten_tgia,baiviet.ma_tgia
  ORDER BY baiviet.ma_tgia asc limit 2;

--g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”,“em” 

SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,baiviet.ma_tloai,baiviet.tomtat,baiviet.noidung,baiviet.ma_tgia,baiviet.ngayviet,baiviet.hinhanh 
FROM baiviet WHERE ten_bhat LIKE '%yêu%' OR ten_bhat like '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
