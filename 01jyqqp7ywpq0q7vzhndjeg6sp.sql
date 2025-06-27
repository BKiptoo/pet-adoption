CREATE DATABASE  student_db;
USE student_db;


CREATE TABLE Students (
    StudentID INT PRIMARY KEY,
    StudentName VARCHAR(100)
);

CREATE TABLE Courses (
    CourseID INT PRIMARY KEY,
    CourseName VARCHAR(100)
);

CREATE TABLE Instructors (
    InstructorID INT PRIMARY KEY,
    InstructorName VARCHAR(100)
);

CREATE TABLE Enrollments (
    StudentID INT,
    CourseID INT,
    InstructorID INT,
    PRIMARY KEY (StudentID, CourseID),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID),
    FOREIGN KEY (CourseID) REFERENCES Courses(CourseID),
    FOREIGN KEY (InstructorID) REFERENCES Instructors(InstructorID)
);


-- Students
INSERT INTO Students VALUES (1, 'Alice');
INSERT INTO Students VALUES (2, 'Bob');
INSERT INTO Students VALUES (3, 'Charlie');

-- Courses
INSERT INTO Courses VALUES (1, 'Math');
INSERT INTO Courses VALUES (2, 'Science');
INSERT INTO Courses VALUES (3, 'History');

-- Instructors
INSERT INTO Instructors VALUES (1, 'Mr. Smith');
INSERT INTO Instructors VALUES (2, 'Dr. Brown');
INSERT INTO Instructors VALUES (3, 'Dr. Green');

-- Enrollments (StudentID, CourseID, InstructorID)
INSERT INTO Enrollments VALUES (1, 1, 1); -- Alice - Math - Mr. Smith
INSERT INTO Enrollments VALUES (1, 2, 2); -- Alice - Science - Dr. Brown
INSERT INTO Enrollments VALUES (2, 1, 1); -- Bob - Math - Mr. Smith
INSERT INTO Enrollments VALUES (3, 3, 3); -- Charlie - History - Dr. Green
INSERT INTO Enrollments VALUES (3, 1, 1); -- Charlie - Math - Mr. Smith
INSERT INTO Enrollments VALUES (3, 2, 2); -- Charlie - Science - Dr. Brown

-- 4. Example Query: Show all enrollments with names

SELECT 
    s.StudentName,
    c.CourseName,
    i.InstructorName
FROM Enrollments e
JOIN Students s ON e.StudentID = s.StudentID
JOIN Courses c ON e.CourseID = c.CourseID
JOIN Instructors i ON e.InstructorID = i.InstructorID;
