<?php include "chat-flow/get_conn.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Available Therapists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-card {
            border: 1px solid #ccc;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.05);
            background-color: white;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .therapist-info {
            margin-left: 15px;
        }

        .therapist-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .connect-btn {
            margin-top: 15px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container my-5">
        <h2 class="mb-4">Therapists Who Can Help You</h2>

        <div class="row">
            <?php if (!empty($therapists)): ?>
                <?php foreach ($therapists as $therapist): ?>
                    <div class="col-md-6">
                        <div class="profile-card">
                            <div class="d-flex align-items-center">
                                <img src="avatar.png" alt="profile" class="profile-img">
                                <div class="therapist-info">
                                    <div class="therapist-name"><?php echo htmlspecialchars($therapist['full_name']); ?></div>
                                    <p class="text-muted mb-1">Country: <?php echo htmlspecialchars($therapist['country']); ?></p>
                                    <p class="text-muted mb-0">Name Tag: <strong>@<?php echo htmlspecialchars($therapist['name_tag']); ?></strong></p>
                                </div>
                            </div>
                            <form action="" method="post">
                                <input type="hidden" name="tuser_id" value="<?php echo htmlspecialchars($therapist['user_id']); ?>">
                                <input type="hidden" name="tuser_name" value="<?php echo htmlspecialchars($therapist['name_tag']); ?>">
                                <button type="submit" class="btn btn-primary w-100 connect-btn">Connect</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-danger">No therapists are currently available for this problem.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>