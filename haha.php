<!DOCTYPE html>
<html>
<head>
    <title>Photo Album</title>
    <style>
        /* CSS to style the page */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: black; /* Set background to black */
            color: white; /* Set text color to white */
        }

        .gallery {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .gallery img, .gallery video {
            width: 100vw;
            height: auto;
            object-fit: cover;
        }

        .link {
            text-align: center;
            padding: 10px;
        }

        .sentence {
            text-align: center;
            padding: 10px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        $mediaFolders = ['outputs', 'second_folder']; // Array containing the folder names

        // Initialize an array to hold files from all folders
        $allMediaFiles = [];

        // Loop through each folder and read files
        foreach ($mediaFolders as $folder) {
            $mediaFiles = glob($folder . '/*.{jpg,png,mp4}', GLOB_BRACE);
            $allMediaFiles = array_merge($allMediaFiles, $mediaFiles);
        }

        // Shuffle the array of all media filenames
        shuffle($allMediaFiles);

        // Define an array of sentences
        $sentences = [
            "操死我啊啊啊~操死我啊-啊",
            "啵啵~ 嘻~ 放进来呀~",
            "不是老弟！用力操呀 使劲玩藕， 啵啵我就是用来被你操哒",
            "啊 啊 啊 啊 干死我啊 快点啵啵等不了",
            "干死我 使劲干！",
            "宝宝快放进来快",
            "嗯呢嗯~ 嗯",
            "抱抱~啵啵 嗯~~ 我爱你~~",
            "我们每天都这样好不好呀~",
            "嗯嗯~ 可以哒 可以操我哦哦",
            "我好喜欢你~",
            "不是你什么意思啊~ ",
            "我脱衣服啦~",
            "可以揉揉我的胸嘛",
            "啵啵鸡巴好硬~",
            "水流我腿上啦~",
            "重一点！啊啊",
            "啊疼疼~",
            "不要-不要",
            "啊！射给我射给我",
            "啊-啊-啊射给我！",
            "干死我！",
            "呜呼 我是啵啵的小玩具嘛",
            "只给你一个人操哦~",
            "快一点！",
            "好爽啊~嘿嘿",
            "你要把我小穴操坏了啵啵， 重一点！",
            "嗯嗯。。想被操了",
            "好厉害！ 嗯额 - 啊！",
            "玩坏我里面！啊~~~",
            "夹断你嘻嘻",
            "啊干死我我好喜欢！",
            "爸爸 使劲点呀~",
            "啵啵你可以把我干烂嘛！",
            "嘻嘻，啊-啊",
        ];

        // Loop through all media files
        foreach ($allMediaFiles as $index => $mediaFile) {
            // Determine the file type and generate appropriate HTML tag
            $extension = pathinfo($mediaFile, PATHINFO_EXTENSION);
            if ($extension === 'jpg' || $extension === 'png') {
                echo '<img src="' . $mediaFile . '" alt="Photo">';
            } elseif ($extension === 'mp4') {
                echo '<video controls muted>'; // Added muted attribute
                echo '<source src="' . $mediaFile . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
            }

            // Select a random sentence from the array
            $randomSentence = $sentences[array_rand($sentences)];

            // Add the random sentence after each media file
            echo '<div class="sentence">' . $randomSentence . '</div>';

            // Add a link after the last media file
            if ($index === count($allMediaFiles) - 1) {
                echo '<div class="link"><a href="https://mrdeepfakes.com/celebrities/guan-xiaotong" style="color: white;">好吗</a></div>';
            }
        }
        ?>
    </div>
</body>
</html>
