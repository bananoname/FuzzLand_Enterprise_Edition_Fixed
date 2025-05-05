# 🧪 FuzzLand: Recon & Exploit - CTF Lab

Chào mừng bạn đến với môi trường thực hành **FuzzLand**, nơi bạn sẽ rèn luyện các kỹ năng `Recon`, `Fuzzing`, và `Exploitation` như trong thực tế!
Tại đây, bạn sẽ vào một vai **"Chuyên gia bảo mật nội bộ** được giao nhiệm vụ kiểm thử một hệ thống staging bị rò rỉ từ công ty công nghệ mô phỏng **FuzzLand-Cybercure**.

> FuzzLand không chỉ là một bài lab – mà là một hành trình thâm nhập, phát hiện và khai thác những ngóc ngách bị bỏ quên trong một hệ thống tưởng chừng đã được kiểm tra kỹ lưỡng.
---
## 🧠 Bối cảnh & Cốt truyện

> 🗂️ FuzzLand-Cybercure – một startup AI từng nổi danh – đang trong giai đoạn gấp rút hoàn thiện hệ thống nội bộ mới để trình diễn với nhà đầu tư. Tuy nhiên, trong lúc triển khai vội vàng, nhiều lỗ hổng bảo mật đã bị bỏ sót.

Một số nhân viên cũ để lại các thành phần chưa cấu hình hoàn chỉnh như:
- Subdomain ẩn không được giám sát
- Endpoint debug bị bỏ quên
- File `.git` chưa xóa khỏi production
- API chưa kiểm tra phân quyền

Bạn được giao nhiệm vụ giả lập tấn công để kiểm tra toàn bộ hệ thống và tìm ra các flag bị ẩn bên trong.

---

## 🌐 Mô tả Môi trường

- **Domain chính**: `FuzzLand.local`
- **Subdomains**: 
  - `dev.FuzzLand.local`
  - `test.FuzzLand.local`
  - `internal.FuzzLand.local`

> **Lưu ý**: Bạn cần chỉnh `/etc/hosts` để ánh xạ domain tới `127.0.0.1` nếu chạy local Docker.

```
127.0.0.1   FuzzLand.local dev.FuzzLand.local test.FuzzLand.local internal.FuzzLand.local
```

---

## 🎯 Mục Tiêu

Khám phá các thư mục ẩn, subdomain, trang debug, và thông tin nhạy cảm bằng các kỹ thuật:

- Directory Fuzzing
- Page & Recursive Fuzzing
- Parameter Fuzzing (GET/POST)
- Header Bypass

---

## 📁 Fuzzing Mẫu

### 1. Fuzz thư mục ẩn:

```bash
ffuf -u http://FuzzLand.local/FUZZ -w /usr/share/seclists/Discovery/Web-Content/directory-list-2.3-medium.txt -mc all
```

### 2. Fuzz file trong `/admin/`:

```bash
ffuf -u http://FuzzLand.local/admin/FUZZ -w /usr/share/seclists/Discovery/Web-Content/common.txt -mc all
```

### 3. Fuzz subdomain:

```bash
ffuf -u http://FUZZ.FuzzLand.local -w /usr/share/seclists/Discovery/DNS/subdomains-top1million-110000.txt -H "Host: FUZZ.FuzzLand.local" -fs 0
```

---

## 🔍 Git Enumeration (`dev.FuzzLand.local`)

```bash
# Dò xem có /.git không
curl http://dev.FuzzLand.local/.git/HEAD

# Clone lại repo:
git clone http://dev.FuzzLand.local/.git recovered-dev
cd recovered-dev
git branch -a
git checkout dev-legacy
cat legacy.php
```

---

## 🚩 FLAG

- Mỗi khu vực có thể chứa file PHP, TXT hoặc LOG với FLAG dạng:
  ```
  FLAG{something_hidden_here}
  ```

- Tổng cộng có ít nhất **5 flag** được chèn rải rác ở nhiều nơi: dev, config, backup, debug, Git repo...

---

## 👨‍💻 Docker Setup (nếu chưa có)

```bash
docker-compose up -d
```

> File `docker-compose.yml` và cấu hình Virtual Hosts đã được thiết lập sẵn để hỗ trợ subdomain mapping.

---

Chúc bạn săn flag vui vẻ và học được thật nhiều kỹ năng thực tế! 🕵️‍♂️🧠
