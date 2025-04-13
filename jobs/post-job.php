<?php
require "../includes/header.php";
require "../config/config.php";

// 🔒 Step 1: Check if user is logged in and is a Company
if (!isset($_SESSION['username']) || $_SESSION['type'] !== "Company") {
    echo "<script>
        alert('Please login as a company to post a job.');
        window.location.href = '" . APPURL . "/auth/login.php';
    </script>";
    exit;
}

// Fetch categories for dropdown
$get_categories = $conn->query("SELECT * FROM categories");
$get_categories->execute();
$get_category = $get_categories->fetchAll(PDO::FETCH_OBJ);

// 📝 Step 2: Handle form submission
if (isset($_POST['submit'])) {
    if (
        empty($_POST['job_title']) || empty($_POST['job_region']) || empty($_POST['job_type']) ||
        empty($_POST['vacancy']) || empty($_POST['experience']) || empty($_POST['salary']) ||
        empty($_POST['gender']) || empty($_POST['application_deadline']) || empty($_POST['job_description']) ||
        empty($_POST['responsibilities']) || empty($_POST['education_experience']) || empty($_POST['other_benifits']) ||
        empty($_POST['job_category'])
    ) {
        echo "<script>alert('One or more fields are empty. Please fill all fields.')</script>";
    } else {
        // Get inputs
        $job_title = $_POST['job_title'];
        $job_region = $_POST['job_region'];
        $job_type = $_POST['job_type'];
        $vacancy = $_POST['vacancy'];
        $job_category = $_POST['job_category'];
        $experience = $_POST['experience'];
        $salary = $_POST['salary'];
        $gender = $_POST['gender'];
        $application_deadline = $_POST['application_deadline'];
        $job_description = $_POST['job_description'];
        $responsibilities = $_POST['responsibilities'];
        $education_experience = $_POST['education_experience'];
        $other_benifits = $_POST['other_benifits'];

        // Use company data from session
        $company_email = $_SESSION['email'];
        $company_name = $_SESSION['username'];
        $company_id = $_SESSION['id'];
        $company_image = $_SESSION['image'];

        // Insert into DB
        $insert = $conn->prepare("INSERT INTO jobs 
            (job_title, job_region, job_type, vacancy, job_category, experience, salary, gender, application_deadline, 
            job_description, responsibilities, education_experience, other_benifits, company_email, company_name, company_id, company_image)
            VALUES 
            (:job_title, :job_region, :job_type, :vacancy, :job_category, :experience, :salary, :gender, :application_deadline,
            :job_description, :responsibilities, :education_experience, :other_benifits, :company_email, :company_name, :company_id, :company_image)");

        $insert->execute([
            ':job_title' => $job_title,
            ':job_region' => $job_region,
            ':job_type' => $job_type,
            ':vacancy' => $vacancy,
            ':job_category' => $job_category,
            ':experience' => $experience,
            ':salary' => $salary,
            ':gender' => $gender,
            ':application_deadline' => $application_deadline,
            ':job_description' => $job_description,
            ':responsibilities' => $responsibilities,
            ':education_experience' => $education_experience,
            ':other_benifits' => $other_benifits,
            ':company_email' => $company_email,
            ':company_name' => $company_name,
            ':company_id' => $company_id,
            ':company_image' => $company_image
        ]);

        echo "<script>alert('Job posted successfully!'); window.location.href='post-job.php';</script>";
        exit;
    }
}
?>

<!-- HTML STARTS -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('../images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Post A Job</h1>
        <div class="custom-breadcrumbs">
          <a href="<?php echo APPURL; ?>">Home</a> <span class="mx-2 slash">/</span>
          <a href="#">Job</a> <span class="mx-2 slash">/</span>
          <span class="text-white"><strong>Post a Job</strong></span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="site-section">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="d-flex align-items-center">
          <div>
            <h2>Post A Job</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-lg-12">
      <form class="p-4 p-md-5 border rounded" action="" method="post">
  <!-- Job Title -->
  <div class="form-group">
    <label for="job-title">Job Title</label>
    <input type="text" name="job_title" class="form-control" id="job-title" placeholder="Product Designer">
  </div>

  <!-- Job Region -->
  <div class="form-group">
    <label for="job-region">Job Region</label>
    <select name="job_region" class="form-control">
      <option value="">-- Select Region --</option>
      <option>Anywhere</option>
      <option>San Francisco</option>
      <option>Palo Alto</option>
      <option>New York</option>
      <option>Manhattan</option>
      <option>Ontario</option>
      <option>Toronto</option>
      <option>Kansas</option>
      <option>Mountain View</option>
    </select>
  </div>

  <!-- Job Type -->
  <div class="form-group">
    <label for="job-type">Job Type</label>
    <select name="job_type" class="form-control">
      <option value="">-- Select Job Type --</option>
      <option>Part Time</option>
      <option>Full Time</option>
    </select>
  </div>

  <!-- Vacancy -->
  <div class="form-group">
    <label for="vacancy">Vacancy</label>
    <input type="text" name="vacancy" class="form-control" id="vacancy" placeholder="e.g. 3">
  </div>

  <!-- Job Category -->
  <div class="form-group">
    <label for="job-category">Job Category</label>
    <select name="job_category" class="form-control">
      <option value="">-- Select Category --</option>
      <?php foreach($get_category as $category): ?>
        <option><?php echo $category->name; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <!-- Experience -->
  <div class="form-group">
    <label for="experience">Experience</label>
    <select name="experience" class="form-control">
      <option value="">-- Select Experience --</option>
      <option>1-3 years</option>
      <option>3-6 years</option>
      <option>6-9 years</option>
    </select>
  </div>

  <!-- Salary -->
  <div class="form-group">
    <label for="salary">Salary</label>
    <select name="salary" class="form-control">
      <option value="">-- Select Salary --</option>
      <option>$50k - $70k</option>
      <option>$70k - $100k</option>
      <option>$100k - $150k</option>
    </select>
  </div>

  <!-- Gender -->
  <div class="form-group">
    <label for="gender">Gender</label>
    <select name="gender" class="form-control">
      <option value="">-- Select Gender --</option>
      <option>Male</option>
      <option>Female</option>
      <option>Any</option>
    </select>
  </div>

  <!-- Application Deadline -->
  <div class="form-group">
    <label for="application-deadline">Application Deadline</label>
    <input type="text" name="application_deadline" class="form-control" id="application-deadline" placeholder="e.g. 20-12-2025">
  </div>

  <!-- Job Description -->
  <div class="form-group">
    <label>Job Description</label>
    <textarea name="job_description" rows="4" class="form-control" placeholder="Write job description..."></textarea>
  </div>

  <!-- Responsibilities -->
  <div class="form-group">
    <label>Responsibilities</label>
    <textarea name="responsibilities" rows="4" class="form-control" placeholder="Write responsibilities..."></textarea>
  </div>

  <!-- Education & Experience -->
  <div class="form-group">
    <label>Education & Experience</label>
    <textarea name="education_experience" rows="4" class="form-control" placeholder="Write education & experience..."></textarea>
  </div>

  <!-- Other Benefits -->
  <div class="form-group">
    <label>Other Benefits</label>
    <textarea name="other_benifits" rows="3" class="form-control" placeholder="Write other benefits..."></textarea>
  </div>

  <!-- Submit -->
  <div class="text-right">
    <input type="submit" name="submit" class="btn btn-primary btn-md" value="Post Job">
  </div>
</form>


<?php require "../includes/footer.php"; ?>
