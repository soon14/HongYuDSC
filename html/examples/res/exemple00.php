<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
echo "<style type=\"text/Css\">\n<!--\n.test1\n{\n    border: solid 1px #FF0000;\n    background: #FFFFFF;\n    border-collapse: collapse;\n}\n-->\n</style>\n<page style=\"font-size: 14px\">\n    <span style=\"font-weight: bold; font-size: 18pt; color: #FF0000; font-family: Times\">Bonjour, voici quelques exemples<br></span>\n    <br>\n    Retours à la ligne autorisés : &lt;br&gt;, &lt;br &gt;, &lt;br/&gt;, &lt;br /&gt; <br />\n    <br>\n    Barre horizontale &lt;hr&gt;<hr style=\"height: 4mm; background: #AA5500; border: solid 1mm #0055AA\">\n    Exemple de lien : <a href=\"http://html2pdf.fr/\" >le site HTML2PDF</a><br>\n    <br>\n    Image : <img src=\"./res/logo.gif\" alt=\"Logo\" width=150 /><br>\n    <br>\n    Alignement horizontal des DIVs et TABLEs<br />\n    <table style=\"text-align: center; border: solid 2px red; background: #FFEEEE;width: 40%\" align=\"center\"><tr><td style=\"width: 100%\">Test 1</td></tr></table><br />\n    <table style=\"text-align: center; border: solid 2px red; background: #FFEEEE;width: 40%; margin: auto\"><tr><td style=\"width: 100%\">Test 2</td></tr></table><br />\n    <div style=\"text-align: center; border: solid 2px red; background: #FFEEEE;width: 40%; margin: auto\">Test 3</div><br />\n    test de tableau imbriqué :<br>\n    <table border=\"1\" bordercolor=\"#007\" bgcolor=\"#AAAAAA\" align=\"center\">\n        <tr>\n            <td border=\"1\">\n                <table style=\"border: solid 1px #FF0000; background: #FFFFFF; width: 100%; text-align: center\">\n                    <tr>\n                        <th style=\"border: solid 1px #007700;width: 50%\">C1 € «</th>\n                        <td style=\"border: solid 1px #007700;width: 50%\">C2 € «</td>\n                    </tr>\n                    <tr>\n                        <td style=\"border: solid 1px #007700;width: 50%\">D1 &euro; &laquo;</td>\n                        <th style=\"border: solid 1px #007700;width: 50%\">D2 &euro; &laquo;</th>\n                    </tr>\n                </table>\n            </td>\n            <td border=\"1\">A2</td>\n            <td border=\"1\">AAAAAAAA</td>\n        </tr>\n        <tr>\n            <td border=\"1\">B1</td>\n            <td border=\"1\" rowspan=\"2\">\n                <table class=\"test1\">\n                    <tr>\n                        <td style=\"border: solid 2px #007700\">E1</td>\n                        <td style=\"border: solid 2px #000077; padding: 2mm\">\n                            <table style=\"border: solid 1px #445500\">\n                                <tr>\n                                    <td>\n                                        <img src=\"./res/logo.gif\" alt=\"Logo\" width=100 />\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                    <tr>\n                        <td style=\"border: solid 2px #770000\">F1</td>\n                        <td style=\"border: solid 2px #007777\">F2</td>\n                    </tr>\n                </table>\n            </td>\n            <td border=\"1\"><barcode type=\"EAN13\" value=\"45\" style=\"width: 30mm; height: 6mm; font-size: 4mm\"></barcode></td>\n        </tr>\n        <tr>\n            <td border=\"1\"><barcode type=\"C39\" value=\"HTML2PDF\" label=\"none\" style=\"width: 35mm; height: 8mm\"></barcode></td>\n            <td border=\"1\">A2</td>\n        </tr>\n    </table>\n    <br>\n    Exemple avec border et padding : <br>\n    <table style=\"border: solid 5mm #770000; padding: 5mm;\" cellspacing=\"0\" >\n        <tr>\n            <td style=\"border: solid 3mm #007700; padding: 2mm;\"><img src=\"./res/off.png\" alt=\"\" style=\"width: 20mm\"></td>\n        </tr>\n    </table>\n    <img src=\"./res/off.png\" style=\"width: 10mm;\"><img src=\"./res/off.png\" style=\"width: 10mm;\"><img src=\"./res/off.png\" style=\"width: 10mm;\"><img src=\"./res/off.png\" style=\"width: 10mm;\"><img src=\"./res/off.png\" style=\"width: 10mm;\"><br>\n    <br>\n    <table style=\"border: solid 1px #440000; width: 150px\"  cellspacing=\"0\"><tr><td style=\"width: 100%\">Largeur : 150px</td></tr></table><br>\n    <table style=\"border: solid 1px #440000; width: 150pt\"  cellspacing=\"0\"><tr><td style=\"width: 100%\">Largeur : 150pt</td></tr></table><br>\n    <table style=\"border: solid 1px #440000; width: 100mm\"  cellspacing=\"0\"><tr><td style=\"width: 100%\">Largeur : 100mm</td></tr></table><br>\n    <table style=\"border: solid 1px #440000; width: 5in\"    cellspacing=\"0\"><tr><td style=\"width: 100%\">Largeur : 5in</td></tr></table><br>\n    <table style=\"border: solid 1px #440000; width: 80%\"    cellspacing=\"0\"><tr><td style=\"width: 100%\">Largeur : 80% </td></tr></table><br>\n</page>";

?>
