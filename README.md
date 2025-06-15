<p align="center"><a href="https://laravel-kaloriku-production.up.railway.app/" target="_blank"><img src="https://github.com/ezVlee/KaloriKu/blob/main/FB/public/assets/imgs/logo.png" width="400"></a></p>

# 🍱 KaloriKu – Smart IndonesiannFood Recognition & Calorie Estimation

*A Capstone Project by Team CC25-CR353 – Coding Camp*

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)  
> **KaloriKu** is an AI-powered web application that simplifies healthy living by identifying Indonesian food from images and estimating its nutritional content — all in a single click.

---

## 🚀 Overview

**KaloriKu** is an innovative AI-based calorie tracking application designed specifically for **Indonesian cuisine**, addressing the inaccuracy of global apps in recognizing local dishes. This project tackles a real problem: **87% of Indonesians struggle** to track the nutritional content of traditional foods due to irrelevant global databases and diverse regional recipes.

The application is built with two main components:
- **Machine Learning**: Food image classification model
- **Frontend & Backend**: Web platform with integrated APIs

---

### 🧠 Machine Learning

- **Task**: Food image classification
- **Framework**: TensorFlow
- **Architecture**: Convolutional Neural Network (CNN) based on MobileNetV2
- **Classification Target**: 45+ popular Indonesian dishes
- **Model Output**: Optimized `.tflite` file for deployment

#### 🔍 Architecture & Model Choice

**Chosen Model**: MobileNetV2

Reasons for Selection:
- **Efficient and Lightweight**: Designed by Google for low-resource devices, ensuring fast predictions for responsive web interaction
- **High Accuracy**: Proven performance for image classification tasks
- **Transfer Learning-Friendly**: Easy to fine-tune for specific datasets

**Approach**: Transfer Learning  
Instead of training from scratch, we fine-tuned a pre-trained MobileNetV2 model from ImageNet.

**How it works**:
- Pre-trained model already recognizes general visual features (shapes, textures, colors)
- Early layers are frozen (non-trainable)
- Custom classification layers are added and trained on our food dataset

**Model Structure**:
- `Base Model`: MobileNetV2 (without top classification layer, `include_top=False`)
- `GlobalAveragePooling2D`: Summarizes key features
- `Dense(128, activation='relu')`: Learns complex patterns specific to Indonesian food
- `Dropout(0.5)`: Prevents overfitting
- `Dense(45+, activation='softmax')`: Final output layer for food class prediction

#### 📊 Data & Training Process

- **Dataset**: 45+ classes of authentic Indonesian dishes, split into training and validation sets
- **Augmentation**: Used on training data (e.g., horizontal flips) to improve model robustness
- **Training Parameters**:
  - **Optimizer**: Adam
  - **Loss Function**: categorical_crossentropy
  - **Callback**: ReduceLROnPlateau (auto-tunes learning rate on validation accuracy plateau)

#### 🧪 TFLite Model Conversion

After training and validating the model, it is converted into **TensorFlow Lite (.tflite)** format.

**Purpose**: Optimized deployment

**Benefits**:
- **Smaller File Size**: Faster app loading and lower bandwidth usage
- **Faster Inference**: Low-latency predictions
- **Portability**: Easily deployable across platforms (web, mobile, edge devices)

---

### 💻 Front-End & Back-End

The KaloriKu web application is built with **Laravel** (PHP) for the backend and asset management handled using **Webpack Mix**.

#### 🔧 Backend

- **Framework**: Laravel
- **Architecture**: MVC (Model-View-Controller)
- **Features**:
  - Routing, middleware, and user authentication
  - RESTful API for interaction with the ML model
- **Server**: Apache2
- **Database**: MySQL with phpMyAdmin interface

#### 🖥️ Frontend

- Built using Laravel Mix (Webpack abstraction)
- Supports asset compilation (JavaScript, CSS, SCSS)
- Enables auto build, minification, and hot reload for efficient development

#### 🗃️ Database
- **MySQL** used to manage:
  - User data
  - Classification results
  - Food history
  - Activity logs
- Managed using **phpMyAdmin** for ease of table relations and access control

> The synergy between Laravel, Webpack Mix, Apache2, and MySQL provides a **robust, scalable, and developer-friendly** ecosystem. KaloriKu is not just smart in recognizing Indonesian food — it's also reliable and user-focused in design and performance.

---

## ✨ Features

- 📸 **Image-Based Food Detection**  
  Snap or upload a photo — KaloriKu will automatically identify the food.

- 🧠 **Real-Time Nutrition Estimation**  
  Instantly estimate **calories**, **carbohydrates**, and **fat content**.

- 🌐 **Fully Web-Based**  
  No installation needed — works seamlessly on any modern browser and device.

---

## 📸 Screenshots & Demo
<div align="center">
  ![Home Page](link)
  <br>
  ![Food Recognition Demo](link)
</div>

## 🧑‍💻 Tech Stack

- **Machine Learning**: TensorFlow, Keras, OpenCV
- **Back-End**: Laravel (PHP)
- **Front-End**: HTML, CSS, JavaScript, Laravel Mix
- **Deployment**: Apache2, MySQL, phpMyAdmin

---


## 👥 Team Members
<div align = "center">

| Student ID     | Name                         | Role                             |
|----------------|------------------------------|----------------------------------|
| MC135D5X0073   | Nailah Tsabitah. M           | Machine Learning Engineer        |
| FC525D5Y0114   | Pratama Achmad Al Dzikri     | Front-End & Back-End Developer   |
| MC325D5Y0399   | Javier Elian Putra Karjadi   | Machine Learning Engineer        |
| FC786D5Y0448   | Gheryyan Washesya Syagara    | Front-End & Back-End Developer   |
| MC008D5Y0587   | Feivel Jethro Ezhekiel       | Machine Learning Engineer        |
</div>

---

## 💡 How to Use

Follow this steps to run Kaloriku on your local machine or server:

1. **Clone the repository**

   ```bash
   git clone https://github.com/ezVlee/KaloriKu.git
   cd KaloriKu
2. **Install Dependencies**
   ```bash
   composer install
   npm install
   npm run dev
3. **Configure Environment**
   ```bash
   cp .env.example .env 
4. **Generate application key**
   ```bash
   php artisan key:generate
5. **Run migrations and seed database (if needed)**
   ```bash
   php artisan migrate --seed
6. **Start the server**
   ```bash
   php artisan serve
7. **Access the app**
   ```bash
   http://localhost:8000

## 🤝 Contribution Guide
Thank you for your interest in contributing to KaloriKu! Here’s how you can help:

1. **Fork the repository**

2. **Create a new branch**

   ```bash
   git checkout -b feature/your-feature-name
3. **Make your changes**
4. **Test your changes locally**
5. **Commit Your changes**
   ```bash
   git commit -m "Add feature XYZ"
6. **Push to your fork**
   ```bash
   git push origin feature/your-feature-name
7. **Create a pull request**
