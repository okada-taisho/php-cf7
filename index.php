<?php
$_SESSION["your_name"] = "なまえ";
$_SESSION["email"] = "test@gmail.com";
$_SESSION["tel"] = "09012345678";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>PHPCF7</title>
</head>

<body>
    <main>
        <?php echo do_shortcode('[contact-form-7 id="3847473" title="コンタクトフォーム 1"]'); ?>
    </main>
</body>

</html>

<script>
    const cf7 = document.querySelector('.wpcf7-form') 
    const render = (html) => cf7.innerHTML = html

    const renderCf7Component = () => {
        const component = `<?php require('cf7-component.php') ?>`
        render(component)
        // ここからDOM操作を記入
        const your_name = document.querySelector('#your_name')
        const submit = document.querySelector('#submit')

        submit?.addEventListener('click', (e) => {
            if(!your_name) {
                e.preventDefault()
            }
        })
        // ここまでDOM操作を記入
    }
    renderCf7Component()
</script>
