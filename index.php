<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
	<title>Tier List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" href="img/others/icon.png">
    <link rel="stylesheet" href="css/reboot.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="title">Tier List</h1>
    <nav class="nav">
        <button class="addLine">ADD A LINE</button>
        
        <form method="post" action="index.php">
            <select class="formSelect" name="theme">
                <option value="mcu" <?php if(isset($_POST['theme']) && $_POST['theme'] === "mcu") { ?> selected <?php } else { ?> selected <?php } ?>>Marvel Cinematic Universe</option>
                <option value="dcu" <?php if(isset($_POST['theme']) && $_POST['theme'] === "dcu") { ?> selected <?php } ?>>DC Universe</option>
                <option value="oparcs" <?php if(isset($_POST['theme']) && $_POST['theme'] === "oparcs") { ?> selected <?php } ?>>One Piece Arcs</option>
            </select>
            <input class="formSubmit" type="submit" value="Change the theme"/>
        </form>
    </nav>

    <section class="tierlistLine">
        <div class="tierlistDiv" ondrop="drop(event)" ondragover="allowDrop(event)">
            <ul class="tierlistUl">
                <li class="tierlistLi">
                    <input type="color" class="pickerColor" name="pickerColor">
                </li>
                <li class="tierlistLi arrowUp">
                    <svg class="tierlistLiSvg">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi arrowDown">
                    <svg class="tierlistLiSvg tierlistLiSvgRotate">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi tierlistCross">
                    <svg class="tierlistCrossSvg">
                        <use href="#icon-cross"></use>
                    </svg>
                </li>
            </ul>
            <span class="tierlistDivTitle" data-color="#FF0000">
                <input class="tierlistDivTitleInput" type="text" id="fname" name="fname" data-title="S">
            </span>
            <div class="tierlistImgs"></div>
        </div>
        <div class="tierlistDiv" ondrop="drop(event)" ondragover="allowDrop(event)">
            <ul class="tierlistUl">
                <li class="tierlistLi">
                    <input type="color" class="pickerColor" name="pickerColor">
                </li>
                <li class="tierlistLi arrowUp">
                    <svg class="tierlistLiSvg">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi arrowDown">
                    <svg class="tierlistLiSvg tierlistLiSvgRotate">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi tierlistCross">
                    <svg class="tierlistCrossSvg">
                        <use href="#icon-cross"></use>
                    </svg>
                </li>
            </ul>
            <span class="tierlistDivTitle" data-color="#FF7B00">
                <input class="tierlistDivTitleInput" type="text" id="fname" name="fname" data-title="A">
            </span>
            <div class="tierlistImgs"></div>
        </div>
        <div class="tierlistDiv" ondrop="drop(event)" ondragover="allowDrop(event)">
            <ul class="tierlistUl">
                <li class="tierlistLi">
                    <input type="color" class="pickerColor" name="pickerColor">
                </li>
                <li class="tierlistLi arrowUp">
                    <svg class="tierlistLiSvg">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi arrowDown">
                    <svg class="tierlistLiSvg tierlistLiSvgRotate">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi tierlistCross">
                    <svg class="tierlistCrossSvg">
                        <use href="#icon-cross"></use>
                    </svg>
                </li>
            </ul>
            <span class="tierlistDivTitle" data-color="#FFA200">
                <input class="tierlistDivTitleInput" type="text" id="fname" name="fname" data-title="B">
            </span>
            <div class="tierlistImgs"></div>
        </div>
        <div class="tierlistDiv" ondrop="drop(event)" ondragover="allowDrop(event)">
            <ul class="tierlistUl">
                <li class="tierlistLi">
                    <input type="color" class="pickerColor" name="pickerColor">
                </li>
                <li class="tierlistLi arrowUp">
                    <svg class="tierlistLiSvg">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi arrowDown">
                    <svg class="tierlistLiSvg tierlistLiSvgRotate">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi tierlistCross">
                    <svg class="tierlistCrossSvg">
                        <use href="#icon-cross"></use>
                    </svg>
                </li>
            </ul>
            <span class="tierlistDivTitle" data-color="#FFC800">
                <input class="tierlistDivTitleInput" type="text" id="fname" name="fname" data-title="C">
            </span>
            <div class="tierlistImgs"></div>
        </div>
        <div class="tierlistDiv" ondrop="drop(event)" ondragover="allowDrop(event)">
            <ul class="tierlistUl">
                <li class="tierlistLi">
                    <input type="color" class="pickerColor" name="pickerColor">
                </li>
                <li class="tierlistLi arrowUp">
                    <svg class="tierlistLiSvg">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi arrowDown">
                    <svg class="tierlistLiSvg tierlistLiSvgRotate">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi tierlistCross">
                    <svg class="tierlistCrossSvg">
                        <use href="#icon-cross"></use>
                    </svg>
                </li>
            </ul>
            <span class="tierlistDivTitle" data-color="#FFF700">
                <input class="tierlistDivTitleInput" type="text" id="fname" name="fname" data-title="D">
            </span>
            <div class="tierlistImgs"></div>
        </div>
    </section>

    <section class="tierlistItem">
        <div class="tierlistDiv" ondrop="drop(event)" ondragover="allowDrop(event)">
            <?php
                $option = isset($_POST['theme']) ? $_POST['theme'] : false;
                if($option === "mcu") {
                    $path = 'img/mcu/';
                }
                else if($option === "dcu") {
                    $path = 'img/dcu/';
                }
                else if($option === "oparcs") {
                    $path = 'img/oparcs/';
                }
                else {
                    $path = 'img/mcu/';
                }
                $tab = array();
                $id = 1;
                foreach (new DirectoryIterator($path) as $fileInfo) {
                    if($fileInfo->isDot()) continue;
                    array_push($tab, $fileInfo->getFilename());
                }
                sort($tab);
                foreach ($tab as $value) {
                    echo '<img src="'. $path . $value . '" draggable="true" ondragstart="drag(event)" id="drag' . $id . '">';
                    $id++;
                }
            ?>
        </div>
    </section>

    <template>
        <div class="tierlistDiv" ondrop="drop(event)" ondragover="allowDrop(event)">
            <ul class="tierlistUl">
                <li class="tierlistLi">
                    <input type="color" class="pickerColor" name="pickerColor">
                </li>
                <li class="tierlistLi arrowUp">
                    <svg class="tierlistLiSvg">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi arrowDown">
                    <svg class="tierlistLiSvg tierlistLiSvgRotate">
                        <use href="#icon-ctrl"></use>
                    </svg>
                </li>
                <li class="tierlistLi tierlistCross">
                    <svg class="tierlistCrossSvg">
                        <use href="#icon-cross"></use>
                    </svg>
                </li>
            </ul>
            <span class="tierlistDivTitle" data-color="#949494">
                <input class="tierlistDivTitleInput" type="text" id="fname" name="fname" data-title="Title">
            </span>
        </div>
    </template>
    
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-ctrl" viewBox="0 0 32 20">
                <path d="M23 14c-0.278 0-0.555-0.116-0.753-0.341l-6.247-7.14-6.247 7.14c-0.364 0.416-0.995 0.458-1.411 0.094s-0.458-0.995-0.094-1.411l7-8c0.19-0.217 0.464-0.341 0.753-0.341s0.563 0.125 0.753 0.341l7 8c0.364 0.416 0.322 1.047-0.094 1.411-0.19 0.166-0.424 0.247-0.658 0.247z"></path>
            </symbol>
        </defs>
    </svg>

    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-cross" viewBox="0 0 32 32">
                <path d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </symbol>
        </defs>
    </svg>

    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-paint-format" viewBox="0 0 32 32">
                <path d="M32 18v-12h-6v-2c0-1.1-0.9-2-2-2h-22c-1.1 0-2 0.9-2 2v6c0 1.1 0.9 2 2 2h22c1.1 0 2-0.9 2-2v-2h4v8h-18v4h-1c-0.552 0-1 0.448-1 1v10c0 0.552 0.448 1 1 1h4c0.552 0 1-0.448 1-1v-10c0-0.552-0.448-1-1-1h-1v-2h18zM24 6h-22v-2h22v2z"></path>
            </symbol>
        </defs>
    </svg>
        
    <script src="js/main.js" async></script>
</body>
</html>