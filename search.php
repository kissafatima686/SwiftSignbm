<?php include 'include/header.php'; ?>
<?php include 'include/navbar-advisory.php'; ?>

<?php
$query = isset($_GET['q']) ? htmlspecialchars(trim($_GET['q'])) : '';
$results = [];

if (!empty($query)) {
    // Array of searchable pages on the site with friendly titles
    $pages = [
        'index.php' => 'Home - Swift Sign',
        'about.php' => 'About Us - Swift Sign',
        'services.php' => 'Our Services - Swift Sign',
        'aliyan_services.php' => 'Aliyan Swiftedge Advisory - Portal',
        'business-solutions.php' => 'Business & Corporate Solutions',
        'academic-solutions.php' => 'Research & Academic Solutions',
        'contact.php' => 'Contact Us - Swift Sign',
        'faq.php' => 'FAQ - Swift Sign',
        'trade.php' => 'General Trading Division',
        'regulatory.php' => 'Regulatory & Compliance'
    ];

    foreach ($pages as $file => $title) {
        $path = __DIR__ . '/' . $file;
        if (file_exists($path)) {
            $content = file_get_contents($path);
            
            // Clean content: remove php tags, scripts, styles, and html tags
            $clean_content = preg_replace('/<\?php.*?\?>/s', '', $content);
            $clean_content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $clean_content);
            $clean_content = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $clean_content);
            $clean_content = strip_tags($clean_content);
            // Replace HTML entities
            $clean_content = html_entity_decode($clean_content, ENT_QUOTES, 'UTF-8');
            
            // Search case-insensitively
            $pos = stripos($clean_content, $query);
            if ($pos !== false) {
                // Extract a snippet around the match
                $start = max(0, $pos - 70);
                $length = 200;
                
                $snippet = substr($clean_content, $start, $length);
                
                // Add ellipsis
                if ($start > 0) {
                    $snippet = '...' . $snippet;
                }
                if (strlen($clean_content) > ($start + $length)) {
                    $snippet .= '...';
                }
                
                // Clean up whitespace / newlines
                $snippet = preg_replace('/\s+/', ' ', trim($snippet));
                
                // Highlight the query term in the snippet
                $highlighted_query = '<strong style="background: #ffeaa7; padding: 2px 5px; border-radius: 3px; color: #d63031;">' . $query . '</strong>';
                $snippet = preg_replace('/(' . preg_quote($query, '/') . ')/i', $highlighted_query, $snippet);
                
                $results[] = [
                    'file' => $file,
                    'title' => $title,
                    'snippet' => $snippet
                ];
            }
        }
    }
}
?>

<!-- Page Banner -->
<section class="breadcrumb-area" style="background: url('assets/images/service/advisory.jpg') center center/cover no-repeat; padding: 100px 0; position: relative;">
    <div style="background: rgba(0,0,0,0.65); position: absolute; inset: 0; z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2; text-align: center;">
        <h1 style="color: #fff; font-size: 40px; font-weight: 700; margin: 0;">Search Results</h1>
        <p style="color: #eee; font-size: 16px; margin-top: 10px;">
            <?php if (!empty($query)): ?>
                Showing results for "<strong><?php echo $query; ?></strong>"
            <?php else: ?>
                Enter a keyword to search the website
            <?php endif; ?>
        </p>
    </div>
</section>

<!-- Search Results Content -->
<section style="padding: 80px 0; background: #f5f7fb; min-height: 400px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <!-- Search bar input again for convenience -->
                <div style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.04); margin-bottom: 40px;">
                    <form action="search.php" method="GET">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control input-lg" value="<?php echo $query; ?>" placeholder="Search for business setup, solutions, etc..." required style="height: 50px; border-radius: 8px 0 0 8px; border: 1px solid #ddd; box-shadow: none;">
                            <span class="input-group-btn">
                                <button class="btn btn-theme effect btn-md" type="submit" style="height: 50px; border-radius: 0 8px 8px 0; padding: 0 25px; background: #0077b5; border: none; color: #fff; font-weight: 600;">Search</button>
                            </span>
                        </div>
                    </form>
                </div>

                <!-- Results List -->
                <?php if (!empty($query)): ?>
                    <h3 style="font-weight: 700; margin-bottom: 25px; color: #333;">
                        Found <?php echo count($results); ?> match(es)
                    </h3>
                    
                    <?php if (count($results) > 0): ?>
                        <div style="display: flex; flex-direction: column; gap: 20px;">
                            <?php foreach ($results as $result): ?>
                                <div style="background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.04); border-left: 5px solid #0077b5; transition: 0.3s;" onmouseover="this.style.transform='translateY(-3px)';" onmouseout="this.style.transform='translateY(0)';">
                                    <h4 style="margin-top: 0; font-weight: 700; margin-bottom: 10px;">
                                        <a href="<?php echo $result['file']; ?>" style="color: #0077b5; text-decoration: none;"><?php echo $result['title']; ?></a>
                                    </h4>
                                    <p style="color: #666; line-height: 1.7; margin-bottom: 12px; font-size: 15px;">
                                        <?php echo $result['snippet']; ?>
                                    </p>
                                    <a href="<?php echo $result['file']; ?>" style="font-weight: 600; font-size: 14px; color: #ff7a00; text-decoration: none; display: inline-flex; align-items: center; gap: 5px;">
                                        Visit Page <i class="fas fa-arrow-right" style="font-size: 12px;"></i>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-center" style="background: #fff; padding: 50px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
                            <i class="fas fa-search" style="font-size: 50px; color: #ccc; margin-bottom: 20px;"></i>
                            <h4 style="color: #777;">No matches found for "<strong><?php echo $query; ?></strong>"</h4>
                            <p style="color: #999;">Please double-check your spelling or try searching with different keywords.</p>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="text-center" style="background: #fff; padding: 50px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
                        <i class="fas fa-search-plus" style="font-size: 50px; color: #0077b5; margin-bottom: 20px;"></i>
                        <h4 style="color: #555;">Ready to search the site</h4>
                        <p style="color: #777;">Enter any word or phrase in the search box above to scan our entire website contents.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php include 'include/footer-advisory.php'; ?>
<?php include 'include/bottom.php'; ?>
