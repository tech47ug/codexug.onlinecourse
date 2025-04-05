<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle = 'Home';
$popularCourses = getPopularCourses(6);
$categories = getAllCategories();

require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Learn New Skills Online With LearnHub</h1>
            <p>Choose from over 1000+ online video courses with new additions published every month.</p>
            <div class="hero-btns">
                <a href="courses.php" class="btn btn-primary">Browse Courses</a>
                <a href="register.php" class="btn btn-outline">Join For Free</a>
            </div>
        </div>
        <img src="assets/images/hero-image.png" alt="Online Learning" class="hero-image">
    </div>
</section>

<!-- Categories Section -->
<section class="categories py-3">
    <div class="container">
        <div class="section-title">
            <h2>Top Categories</h2>
            <p>Explore our wide selection of categories to find the perfect course for you.</p>
        </div>
        
        <div class="category-grid">
            <?php foreach ($categories as $category): ?>
            <div class="category-card">
                <div class="category-img">
                    <img src="assets/images/category-<?php echo strtolower($category['name']); ?>.jpg" alt="<?php echo $category['name']; ?>">
                </div>
                <div class="category-info">
                    <h3><?php echo $category['name']; ?></h3>
                    <p><?php echo $category['description'] ?? 'Learn the latest skills in this field'; ?></p>
                    <a href="courses.php?category=<?php echo $category['id']; ?>" class="btn btn-outline">Explore</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Popular Courses Section -->
<section class="courses py-3">
    <div class="container">
        <div class="section-title">
            <h2>Popular Courses</h2>
            <p>Discover our most popular courses loved by thousands of students.</p>
        </div>
        
        <div class="course-grid">
            <?php foreach ($popularCourses as $course): ?>
            <div class="course-card">
                <div class="course-thumbnail">
                    <img src="uploads/courses/<?php echo $course['thumbnail'] ?? 'default.jpg'; ?>" alt="<?php echo $course['title']; ?>">
                    <div class="course-price">
                        $<?php echo $course['discounted_price'] ?? $course['price']; ?>
                        <?php if (isset($course['discounted_price'])): ?>
                            <span class="course-discount">$<?php echo $course['price']; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="course-info">
                    <div class="course-meta">
                        <div class="course-instructor">
                            <img src="uploads/profile_pics/<?php echo $course['instructor_username']; ?>.jpg" alt="<?php echo $course['instructor_username']; ?>">
                            <span><?php echo $course['instructor_username']; ?></span>
                        </div>
                        <div class="course-category">
                            <i class="fas fa-tag"></i> <?php echo $course['category_name']; ?>
                        </div>
                    </div>
                    <h3 class="course-title"><a href="course-detail.php?id=<?php echo $course['id']; ?>"><?php echo $course['title']; ?></a></h3>
                    <p class="course-desc"><?php echo $course['short_description'] ?? substr($course['description'], 0, 100) . '...'; ?></p>
                    <div class="course-footer">
                        <div class="course-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(24)</span>
                        </div>
                        <div class="course-students">
                            <i class="fas fa-users"></i> <?php echo $course['enrollments']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-4">
            <a href="courses.php" class="btn btn-primary">View All Courses</a>
        </div>
    </div>
</section>

<!-- Featured Section -->
<section class="featured py-3">
    <div class="container">
        <div class="featured-content">
            <div class="featured-image">
                <img src="assets/images/featured-image.jpg" alt="Why Choose Us">
            </div>
            <div class="featured-text">
                <h2>Why Choose LearnHub?</h2>
                <p>LearnHub provides you with the most flexible and interactive online learning experience.</p>
                
                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <h4>Expert Instructors</h4>
                            <p>Learn from industry experts who are passionate about teaching.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <h4>Lifetime Access</h4>
                            <p>Get lifetime access to all the courses you purchase.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <h4>Interactive Learning</h4>
                            <p>Engage with interactive lessons, quizzes, and projects.</p>
                        </div>
                    </div>
                </div>
                
                <a href="register.php" class="btn btn-primary">Join Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials py-3">
    <div class="container">
        <div class="section-title">
            <h2>What Our Students Say</h2>
            <p>Hear from our students about their learning experience with LearnHub.</p>
        </div>
        
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>LearnHub has completely transformed my career. The courses are well-structured and the instructors are knowledgeable. I was able to land a new job after completing just two courses!</p>
                </div>
                <div class="testimonial-author">
                    <img src="assets/images/testimonial-1.jpg" alt="Sarah Johnson">
                    <div class="author-info">
                        <h4>Sarah Johnson</h4>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>I've taken many online courses before, but LearnHub stands out for its quality content and engaging teaching methods. The hands-on projects really helped me apply what I learned.</p>
                </div>
                <div class="testimonial-author">
                    <img src="assets/images/testimonial-2.jpg" alt="Michael Chen">
                    <div class="author-info">
                        <h4>Michael Chen</h4>
                        <p>Data Scientist</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>As a busy professional, I appreciate the flexibility LearnHub offers. I can learn at my own pace and the mobile app makes it easy to study on the go. Highly recommended!</p>
                </div>
                <div class="testimonial-author">
                    <img src="assets/images/testimonial-3.jpg" alt="Emma Rodriguez">
                    <div class="author-info">
                        <h4>Emma Rodriguez</h4>
                        <p>Marketing Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta py-3">
    <div class="container">
        <h2>Ready to Start Learning?</h2>
        <p>Join thousands of students who are advancing their careers with our courses.</p>
        <div class="cta-btns">
            <a href="register.php" class="btn btn-primary">Get Started</a>
            <a href="courses.php" class="btn btn-outline">Browse Courses</a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>