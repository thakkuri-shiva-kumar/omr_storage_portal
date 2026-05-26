# Academic OMR Storage Portal

A PHP-based Academic OMR Storage Portal developed for managing, organizing, and displaying OMR sheets dynamically based on academic hierarchy selections such as course, admission year, semester, branch, and subject.

---

## 📌 Project Overview

The Academic OMR Storage Portal is designed to simplify the process of accessing and managing OMR sheets in educational institutions. The system provides a structured multi-step workflow where users can navigate through academic categories and retrieve corresponding OMR sheets efficiently.

The application uses a folder-based dynamic retrieval system and lightweight PHP architecture for fast and easy deployment.

---

## 🚀 Features

- Secure login authentication
- Course-based filtering
- Admission year selection
- Academic year selection
- Semester selection
- Branch selection
- Subject-wise OMR retrieval
- Dynamic folder navigation
- OMR sheet display system
- Simple and lightweight UI
- File-system-based storage architecture

---

## 🏗️ Project Architecture

The application follows a modular PHP architecture:

```text
Login Module
    ↓
Course Selection
    ↓
Admission Year Selection
    ↓
Academic Year Selection
    ↓
Semester Selection
    ↓
Branch Selection
    ↓
Subject Selection
    ↓
OMR Sheet Display
```

---

## 📂 Folder Structure

```text
final/
│
├── css/
├── images/
├── omr/
├── uploads/
├── docs/
│
├── main.php
├── login.php
├── auth.php
├── course.php
├── admission_year.php
├── year.php
├── semester.php
├── branch.php
├── show_omr.php
│
├── README.md
└── .gitignore
```

---

## 🛠️ Technologies Used

### Frontend
- HTML
- CSS
- JavaScript

### Backend
- PHP

### Server
- Apache (XAMPP)

### Tools
- VS Code
- Git
- GitHub

---

## ⚙️ Installation & Setup

### 1️⃣ Clone Repository

```bash
git clone https://github.com/your-username/academic-omr-storage-portal.git
```

---

### 2️⃣ Move Project to XAMPP htdocs

```text
C:\xampp\htdocs\
```

---

### 3️⃣ Start Apache Server

Open XAMPP Control Panel and start:
- Apache

---

### 4️⃣ Run Project

Open browser and visit:

```text
http://localhost/final/main.php
```

---

## 🔄 Workflow

1. User logs into the portal
2. Selects course
3. Selects admission year
4. Selects academic year
5. Selects semester
6. Selects branch
7. Selects subject
8. System retrieves corresponding OMR sheet
9. OMR sheet is displayed


## 🔐 Authentication

The portal uses session-based authentication for secure access management.

---

## 📈 Future Enhancements

- Database integration
- Admin dashboard
- OMR upload module
- Search functionality
- PDF export
- Responsive UI improvements
- Cloud deployment

---

## 🤝 Contribution

Contributions, suggestions, and improvements are welcome.

---

## 📄 License

This project is developed for educational and academic purposes.

---

