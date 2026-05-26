<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-tutorial</title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>

<?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php'?>
        <div class="content">
         <div class="content">
            <h5>3D Array</h5>
            <p>A <b>multidimensional array</b> in C is essentially an array of arrays. The most common type is a 2D array, but you can have more dimensions, like <b>3D arrays</b> or even higher.</p>

            <h5>Example: </h5>
            <p>Let’s say we are storing temperature data for a city over multiple weeks, where:</p>
            <p>The <b>first dimension</b> represents the week. <br>
                The <b>second dimension</b> represents the day of the week. <br>
                The <b>third dimension</b> stores the temperature readings (morning, afternoon, evening).</p>

            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    // 3 weeks, 7 days per week, 3 temperature readings per day
    int temperature[3][7][3] = {
        { {30, 32, 28}, {31, 33, 29}, {32, 34, 30}, {33, 35, 31},
         {34, 36, 32}, {35, 37, 33}, {36, 38, 34} }, //week 1
         { {28, 30, 26},{29, 31, 27}, {30, 32, 28}, {31, 33, 29}, 
         {32, 34, 30}, {33, 35, 31}, {34, 36, 32} },  //week 2
        { {27, 29, 25}, {28, 30, 26}, {29, 31, 27}, {30, 32, 28}, 
        {31, 33, 29}, {32, 34, 30}, {33, 35, 31} }  //week 3
    };

    // Display temperature readings for Week 1, Day 1
    printf("Temperature readings for Week 1, Day 1:\n");
    printf("Morning: %d°C, Afternoon: %d°C, Evening: %d°C\n",
           temperature[0][0][0], temperature[0][0][1], temperature[0][0][2]);

    return 0;
}
                </pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Temperature readings for Week 1, Day 1:
Morning: 30°C, Afternoon: 32°C, Evening: 28°C

                </pre>
            </div>
            <h4>Explanation: </h4>
            <p>We define a 3D array with dimensions [3][7][3]: <br>
                3 weeks<br>
                7 days per week<br>
                3 temperature readings per day (Morning, Afternoon, Evening)</p>

                <h4>Week 1:</h4>
                <table  style="text-align:center; margin-left: 40px; color:aqua" border="1" width="70%">
        <tr>
            <th>Day</th>
            <th>Temp 1</th>
            <th>Temp 2</th>
            <th>Temp 3</th>
        </tr>
        <tr>

        </tr>
        <tr>
            <td>Monday</td>
            <td>30</td>
            <td>32</td>
            <td>28</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>31</td>
            <td>33</td>
            <td>29</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>32</td>
            <td>34</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>33</td>
            <td>35</td>
            <td>31</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>34</td>
            <td>36</td>
            <td>32</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>35</td>
            <td>37</td>
            <td>33</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>36</td>
            <td>38</td>
            <td>34</td>
        </tr>
    </table>
    <h4>Week 2:</h4>
    <table  style="text-align:center; margin-left: 40px; color:aqua" border="1" width="70%">
        <tr>
            <th>Day</th>
            <th>Temp 1</th>
            <th>Temp 2</th>
            <th>Temp 3</th>
        </tr>
        <tr>

        </tr>
        <tr>
            <td>Monday</td>
            <td>28</td>
            <td>30</td>
            <td>26</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>29</td>
            <td>31</td>
            <td>27</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>30</td>
            <td>32</td>
            <td>28</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>31</td>
            <td>33</td>
            <td>29</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>32</td>
            <td>34</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>33</td>
            <td>35</td>
            <td>31</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>34</td>
            <td>36</td>
            <td>32</td>
        </tr>
    </table>
    <h4>Week 3:</h4>
    <table  style="text-align:center; margin-left: 40px; margin-bottom: 20px;color:aqua;" border="1" width="70%">
        <tr>
            <th>Day</th>
            <th>Temp 1</th>
            <th>Temp 2</th>
            <th>Temp 3</th>
        </tr>
        <tr>

        </tr>
        <tr>
            <td>Monday</td>
            <td>27</td>
            <td>29</td>
            <td>25</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>28</td>
            <td>30</td>
            <td>26</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>29</td>
            <td>31</td>
            <td>27</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>30</td>
            <td>32</td>
            <td>28</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>31</td>
            <td>33</td>
            <td>29</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>32</td>
            <td>34</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>33</td>
            <td>35</td>
            <td>31</td>
        </tr>
    </table>
        </div>

  <button class="quiz-btn">
  <i class="fas fa-question-circle"></i> Quick Quiz
</button>
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
<?php include 'includes/footer.php';?>

</body>



</html>