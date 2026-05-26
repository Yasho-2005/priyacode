<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <title>C-tutorial</title>
    <style>
.quiz-container {
  background-color: #1e1e2f;
  color: #a8ff60;
  padding: 20px;
  border-radius: 10px;
  width: fit-content;
  margin-left: 210px;
  margin-top: 20px;
}
.quiz-question {
  margin-bottom: 10px;
}
.quiz-option {
  background-color: #2d2d44;
  border: 2px solid #444;
  color: white;
  padding: 10px;
  margin: 5px 0;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s ease;
}
.quiz-option.correct {
  background-color: #28a745; /* green */
}
.quiz-option.wrong {
  background-color: #dc3545; /* red */
}

/* flowchart */
.flowchart {
  display: flex;
  flex-direction: column;
  align-items: center;
  font-family: Arial, sans-serif;
  color: #00e0ff;
  gap: 30px;
}

.flowchart > div {
  padding: 12px 20px;
  border: 2px solid #00e0ff;
  border-radius: 10px;
  text-align: center;
  min-width: 120px;
  box-shadow: 0 0 15px rgba(0, 224, 255, 0.7);
}

.start, .end {
  background: #111;
  font-weight: bold;
}

.decision {
  background: #1a1a1a;
  width: 140px;
  height: 140px;
  transform: rotate(45deg);
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.decision span {
  transform: rotate(-45deg);
  display: inline-block;
  color: #00e0ff;
  font-weight: bold;
}

.branches {
  display: flex;
  justify-content: space-between;
  width: 300px;
  margin-top: 80px;
}

.branches div {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.process {
  background: #222;
  margin-top: 20px;
}

/* Arrows */
.start::after {
  content: '';
  display: block;
  width: 2px;
  height: 40px;
  background: #00e0ff;
  margin: 0 auto;
}

.process::after {
  content: '';
  display: block;
  width: 2px;
  height: 40px;
  background: #00e0ff;
  margin: 0 auto;
}
.flowchart-img {
  max-width: 150%;   /* Don’t exceed container */
  height: auto;      /* Maintain proportions */
  display: block;
  margin: 20px auto; /* Center the image */
  border-radius: 8px; /* Optional rounded corners */
  box-shadow: 0 4px 12px rgba(0,0,0,0.2); /* Add glow */
  padding: 10px;
  border-radius: 10px;
}


/* Small style to make SVG responsive and match dark site */
.flowchart-wrap { width: 100%; display: block; }
.flowchart-svg { width: min(860px, 100%); height: auto; display: block; margin: 0 auto; }
/* tweak for very small screens */
@media (max-width: 520px) {
.flowchart-wrap { width: 100%; display: block; }
.flowchart-svg { width: min(1050px, 100%); height: auto; display: block; margin: 0 auto; }
}


/* flowers */

.flower {
  position: absolute;
  font-size: 24px;
  animation: float 6s ease-in-out infinite;
  opacity: 0.8;
}

.flower1 { top: 20%; left: 10%; }
.flower2 { top: 60%; left: 80%; }
.flower3 { top: 40%; left: 30%; }

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-15px); }
}


</style>
<link rel="stylesheet" href="style.css?v=1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<body>

<?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php'?>

        <div class="content">
        <div class="content">
            <h3>Structure</h3>
            <p>A <b>structure</b> in C is a <b>user-defined data type</b> that groups related variables of different data types into a single unit. It allows us to store multiple pieces of information together, making it useful for organizing complex data.</p>
            <p> <b><i> "In modern programming, databases are used to store structured data like employee or student details. However, in C, we use structures to group related information together, providing a way to handle such data within a program's memory."</i></b></p>
            <h4>Syntax:</h4>
            <div class="syntax-box">
                <pre>
struct structure_name   
{  
    data_type member1;  
    data_type member2;  
    .  
    .  
    data_type memeberN;  
};</pre>
            </div>
            

            <h5>Example 1:</h5>
            <p>A structure is defined using the <b>struct</b> keyword:</p>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
// Define a structure
struct Student {
    char name[50];
    int age;
    float marks;
};

int main() {
    // Declare a structure variable
    struct Student s1;
    strcpy(s1.name, "Alice");
    s1.age = 20;
    s1.marks = 90;

    // Accessing structure members
    printf("Name: %s\n", s1.name);
    printf("Age: %d\n", s1.age);
    printf("Marks: %.2f\n", s1.marks);

    return 0;
}</pre> 
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Name: Alice
Age: 20
Marks: 90.00</pre>
            </div>
            <p>We use the dot (.) operator to store and access members like s1.name, s1.age, etc</p>

            <h5>Example 2: Storing values at one time</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

struct Student {
    char name[50];
    int age;
    float marks;
};

int main() {
    
    struct Student s1 = {"Alice", 20, 90};

    // Accessing structure members
    printf("Name: %s\n", s1.name);
    printf("Age: %d\n", s1.age);
    printf("Marks: %.2f\n", s1.marks);

    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Name: Alice
Age: 20
Marks: 90.00</pre>
            </div>
            <h5>Example 3: Storing data of multiple students.</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

// Define a structure
struct Student {
    char name[50];
    int age;
    float marks;
};

int main() {
    // Declare an array of structures
    struct Student students[2];

    // Input details for 2 students
    for (int i = 0; i < 2; i++) {
        printf("Enter details for Student %d:\n", i + 1);
        printf("Name: ");
        scanf("%s", students[i].name);
        printf("Age: ");
        scanf("%d", &students[i].age);
        printf("Marks: ");
        scanf("%f", &students[i].marks);
    }

    // Display student details
    printf("\nStudent Details:\n");
    for (int i = 0; i < 2; i++) {
        printf("Student %d - Name: %s, Age: %d, Marks: %.2f\n", i + 1, students[i].name, 
        students[i].age, students[i].marks);
    }

    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Enter details for Student 1:
Name: Alice
Age: 20
Marks: 85.5

Enter details for Student 2:
Name: Bob
Age: 22
Marks: 90.0

Student Details:
Student 1 - Name: Alice, Age: 20, Marks: 85.50
Student 2 - Name: Bob, Age: 22, Marks: 90.00</pre>
            </div>
        
        </div>

        
            <div class="code-navigation">
  <?php if ($prev): ?>
    <a href="<?= $prev ?>" class="nav-btn">&laquo; Prev</a>
  <?php endif; ?>
  
  <?php if ($next): ?>
    <a href="<?= $next ?>" class="nav-btn">Next &raquo;</a>
  <?php endif; ?>
</div>
 
</div>
        </div> 
        


    </section>

    <script>
function checkAnswer(option, isCorrect) {
  const options = option.parentElement.querySelectorAll('.quiz-option');
  options.forEach(opt => opt.classList.remove('correct', 'wrong'));

  if (isCorrect) {
    option.classList.add('correct');
  } else {
    option.classList.add('wrong');
  }
}
</script>
<?php include 'includes/footer.php';?>

</body>



</html>