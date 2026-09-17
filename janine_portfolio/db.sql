CREATE DATABASE IF NOT EXISTS janine_portfolio
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE janine_portfolio;

CREATE TABLE IF NOT EXISTS messages (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS projects (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    technologies VARCHAR(255),
    project_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO projects (title, description, technologies)
VALUES
('Personal Portfolio Website',
 'Responsive portfolio website for presenting my skills and projects.',
 'HTML, CSS, JavaScript, PHP'),
('Point-of-Sale System',
 'Beginner POS system for product and sales management.',
 'PHP, MySQL, CRUD'),
('AI Automation Concepts',
 'Practice chatbot and automation concepts for small businesses.',
 'AI, Automation, Chatbot');
