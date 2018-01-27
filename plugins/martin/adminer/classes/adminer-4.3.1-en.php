<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.1
*/error_reporting(6135);$Jc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Jc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Th=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Th)$$X=$Th;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé�vt2���!�r0���t~�U�'3M��W�B�'c�P�:6T\rc�A�zr_�WK�\r-�VNFS%~�c���&�\\^�r����u�ŎÞ�ً4'7k����Q��h�'g\rFB\ryT7SS�P�1=ǤcI��:�d��m>�S8L�J��t.M���	ϋ`'C����889�� �Q����2�#8А����6m����j��h�<�����9/��:�J�)ʂ�\0d>!\0Z��v�n��o(���k�7��s��>��!�R\"*nS�\0@P\"��(�#[���@g�o���zn�9k�8�n���1�I*��=�n������0�c(�;�à��!���*c��>Ύ�E7D�LJ��1�J=���1L��?�s=#`�3\$4���uȱ��zG�C YAt�?;�Q�k&��YP�u��ǯ}UaHV%G;�s��<A\0\\��P�\\��&ª�V��\n�SU�t���r���2�	l^�Z6�ej����A�d�[�sն�JP����ҝ��8�=����6#˂74*���#e���!�7{�6��<o�C�9v[�M��-`��k�>�l�ڴ��I��H�3�x����w0t6��%MR%��jh�B�<�\0�AQ<P<:��u/�;\\>��-��ʈ��QH\nv�L+v�æ�<�\r��v����\\*����Ӵݢg��n˩��TЩ2P�\r��ߋ\"+z�8���:#�����2��J[�i����;z�����r�3#�ى�:�n�\r㽃e�pdݍ� �2c��4�k���\rG��E6_���=�SZUǷ㌞O���?��þ27�c�А�hnƋ��u3�E>\$J[�q[\r�I�6.�J�\"EPr�G̊GA��W���\r���6��k���`.-��B2>#��h���X���u\r��=�Z� b�Ł(�╃!JZȔu�yO��Z�M��6�lM[0�䖀��!Im�y�+p�#ag���vW�:qp\"4����he��0�d�Aq-\"������\"2���@�)o�,,�����Rb`@�B@������Q\n�芷�Z���=(r~�l�~��h�sAll�\n7�!1!��#�\0K��A�LH(�!�ʘagH\0�T\ni�/�\$���4Ga�I�!�.�Ř5��M\r�2���	�;�,��LIJ���d?�����%Ո:�N@b.��2�5���t:FAw�B�E�,�-\$��'�:өu�?�tK;ḱ��и��\0ouMD)k_Ph���5MC}7���2�w.Q�B�8)���8(DI�=��y`�ed\0s,`ɕj�H��\"(b���\\��nl�\"ق^�쀭eE�\n���X!SqX��\r���7A���0���y7pP���a�A�4��(y�Jwm�2����.�󉆬fp���;Ƅ5�J�c�q�Qz\\\0[H�� 3�f'b��F���Y�\nA�9_�I��(�f�ӝq�V������4�����RI�Y��&J��F�}�{FT�h9[7�h\0��T�^��j��q�j���Ք���c�WI�@`_�sVD��[�\"{1��3��	������<�l�l.���[����#į��b��u��/�\0�3�va嫑Dp>�2�I�DW՚�kK�A��hH�]��F���W�!]�ʝ�lt�ɕR̭4L[���YC cTj<c;s�q�p�� �5�t�J�m6�%J�-\\��eB=i�-�*%�����TV�[&M8�*\r�b�Y\rih�	��P�9T�-VɰZ���۳�49β���p-�`�����G�ٛ'�����M�:�ř')0�Yu�c�:!�x#צ�-l*�T�\nYl������*D��X� V\\���ڮ�]y��\n�2r,Ɇ��,�d��~ų��s�-�+ֻu�]�\\B����Iw��!�Os�ԯl�YC�Ђ��:�@ƜEU�._)�9u�z��vψS���1��_(S��q齡r�yu�+�Z*�6�u�y�<���z\\|�ZK;�e�ז�oY���;���l��x��-7���4rkYY?��GWt���[Kښ��zo�<����	t��􆶾��ɀg��j��_!��o���\$ I��I�.&�5�P\\��]�����\nC�.��_��;��s�i�S/g�:�P�ɳauNͨ|�a��ᙺ������6�ӎٞ3�|����{�ce�X��<�e�p>N�}��~��O���ҙBl��j�/��K��Hdch-˾������/�������ȶ�hԞ�0��Ќ�Ћ����H��8�");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("\n��B	�� 7��#)��v2�e2���l0��`�\0�a9M�AP�L\"�!�Sq�8 �H\$B���i7����b7�ͅ��f:��gCI�� 0��S�1M�ȵ\\�N�k��	�T)�@�I�AY6Z-@�Mh]���\"��x�X\r�Qt0�1�E#)��x8\n���\\9�D�]v��rys��I���A��ѝ�����\0�A���p��u���g�W\r�s>��i9�LF�a��y���I��u��*}�e0���zM.�O:r���I��k;H/�����7�c����8�:%)ZZ!\"H�>�K�������?��,ϯa����Ȗ3m�Nͷ�EBK[����2�N2��p8@8*�kҖ���5�#+��\$i�n�����J����N�8)�r���\nT���r�/#H�7+� �<�+K��MJ��7��@\"*�Q�3�9����?@���5�����o����Ĉ��,��6����\r(`��4R��N:+*�h�<hbZ��jp����Ҝ��ɁR�.��ukT���Q[��D9Uã��#|���\rcY�B�m\\\r��`������Kj{J?� .�e��̰�+]���Ø�1��\0�:�t��ZՔ�9�H��ox^�vmALb�'{��5�!!1���<�����3�@�3\rI�\\���9(N�s~��xO�e	��û�:\r�n2�����4e�>c~�!pd��rط0����p�7��hʍ00@�Ųa0��%�c���v~���L ��0�^x���k����&�b��0{d\rp����ŝ7.��9�a��X��;c�`X&\r��6�J3��Cr��1�+� �[��PaH^i�(Ƭ����>t+j��w��Ch�l�c��^ߋ����-�\"���.�'C�#�3*4��Q�\\	A	U!A̖\"S�s�4B{E���tt~Cb3!�@����!&%� \0y^Pt� ��p�\"'h��Ėw���sp���b���D4s����C��Z�!�2����,)�#4&���:��� ��{Ø[�J\"�p�P�J-��!����7P����DC�|-!���x�jE ��.F�nDM�}*a�g*EL:�J!)\0@�P&��<�0��A�0`(ӴL�)'^	NI����Ԍ���ܔ��1`�)a�^=�,9�F�\\\n��=���A�1�@��\$�&�5���pҽ@Lb!����T50�T��@�v��=Dm��4��%4zFM\$i:L\$�#�0m��O���,����+��a1O�FKe��K\nt�|��m�<;�r\"\\{q'B�љ�\n[�Z?�ڊ�@��OE��\r9�Aw�(5�3w'�F��~��e.ɴ���b�lim%+F��M��Tʩ^��S��OC#�/�R��D�K�f!\$���]Z��mkT6�Ni\rn�ʺW`��JQի��0@@��!�k�:73Z�Eu*9��#-˥i�ų��\0E�M_Ot�0�u�O\r�D��)J�:�4��c��U�����Q%��C\r�\$:!\0�W\r�Y�\0:��Ce�+�*��<��)�7��g����0� ���@?xAp2�gY���uk�r�?P����eWc�����@��ى@��,�a0%��Qs@��uC������Y,���/��\\J��HSA��Wm��+2ĕ,���Z��3p<����ØuJ�:;R�]/�pa���2�u.&?6�}�>��iH�d\reB�Hԁc�Ve��L���)�pbe��Q��O�u*�U<�`�l�W��Y��Оyob�G#C�'%��H�Zߡ������耷��t���\n[M/_��`�hWP�D&]*NZ.{eS�qg�Ιnΐ���q8��\\�vA�ɠ�gF��On��k�U�0�@�\n�,XL��q)�AhLC������+��W�ݴ=�P����AA�4�I��u,:o#����������)\r����S`�m���( \rX��h�Q�77��ꚗ�B�j���[�Hu%oS�ד����2����T�e�hw��%�ڀ������4�7<����T����!:�O2s�~(е���\\i�\rGV��A2-���:�	��f ә'�g\$����NxH�i��t��Ĥ���@�z�\"Q�5�֥ ��7�i��~~�V7@��;~���?v�rq�ϋ�>�ewJ���n��	�x,[�����N��-�]�:��x0n�q�C��~PIQ����*���FM*���\$�`�Zϴ}�<�A\0!nz߂#�,�����Ѕd�S�p��a`5�	��T__ľeh���GN��r�_�`N����z���+cn�@� �� ��i.]��ӊ�B����BC�B(�z�T<C�������P4�l�s���D���~\0�PP�ޭ�Z��N��B+K���&��pXXPs\$��D\$F�Ɛ\".uH�0BB��X��S\n�M\n�L-ﬥ-H���0��]D*)�X�0ΰ/�~n�*�UIw�0�8I\ndB������yK!@ڕ��0�\"�C��� @�\0��G=�N�,b�i:�-� �L\ro��RY�p.������rs��p����V��}�� ��Z�\$:/�L�f�wC1u�j���Sc~&�fz`Ɗ��*-\0��ɨ�N¦����.L�J��1��\rN����,F�.,�mŏ1Q��#��?�i���|B�OLr�#����q�/�\rQ\n��'�\n'�l�Ό�*��#0�R��'2 �]��!�\$z��gb�Ψt2R��?e\0v���\"���b���d��k\\*�	�z��0��@)\$F�\$� ��&�u�`\"2���I�8N�sIv�������./\0�N�]K-D��#j��&�f+��D��������Ҧ�par|C�+\0�g�h\"-�.��*��,K�\n�'`@��Ɠ2�Gf�:����p<)��O�XI���3\$�-��w�φJ-o�6�A��!��� �:Ft�gm5�OH�5�^��ޞs�	i&yI* �>@Ҏ�S���zq!D�(����(m���P\r¹9��/�=���b�	�Q<�Э��v����l�<��/�c�N��|�?\0ZĻdNz\0�@�s�-��A�tT��#V�`��\"�@`��I�Rn� ��nwG7C��V�3��,�\$��G�*�\"���\0�5P���v��&�̹��>��3���Ԇ@�h撄t�*LIK�I��i\0A@`b�v���?c�`#���:�!��N�>9�צ�2)	�\"41CGr%�:���sGCt�	�S5B�.�a�mM�n_�&|��\$ ���I*�����C��)l�;,�SCR����P�56Y�T�>�r]�XM���t��6���@�S���g��5}U�vQ�?U-!TN�W�6��*k�!HtϏj������t�o�o ��GZ�+.6����;T���x_�#\0^`�����k�`^5@H�b������F@�M��lcZϹ-L'[Q��5�!U�u��1�\\�3M!a��7��\r0�U�^u�^��_u�_�o`6zL�\$9d���)dM1�)I��Vj.��/�]q0µ&��h��_�UZ�4�0���H�ZA�j�I\nl���P@w�= �%KZ)��%��C�ʇT6�&qb\"�\$uD��tG6�\r�l��Es�t\n�t�z+��gR f�E�#q�g����_gzs3�)�kit\"���=L(\"\r�@/`��hS�)�ws�yC��T4M+�apWAxyP�sH�� �s����/���i���2C�9��HWZL�t9��Q1:kx��&��3�4���o�7u�\rӪ1L�7i�E�x\r��.�\$��(�\0O6.��4���1�ܯ.����uǎ�r#���w�\r9�,�Vp�\r�BYX8��@� �S\$��%��/w�j��磼�5f��x@�a�̿���-��n�����[�ɰ/�GjU�!G��B������v2�q��8��/,���.�q�����gB�\0�1��T䶺5U�=��Hmy\0Q���\n��u8v.�J=OiqU\0l���<o���p����B���O�8�\nՉV+GX�Y�Dy/z�P�ǥ��?�-�\r�}2�NX@�^B��\"��P\0ȃ�o`�o����D�<��l=�}�v��}F�@�QB.�}o7(�W,e\$6�O��j�o%4��\\-�aL�M���I�1�?<�;����<V�)EP�XO�\$grŞ�Y���ur�H_@��u%\"X ��\0�UyI�ޫ)�>��2�y�-���r\r�����'�˘([�c�P:�\0�p�op�,+��_����Y��m+<�ݦ�\\\rQ\"\r\0�|�2o�j�9�@�{�����3a�z�Qi�w12�#rz\0]��r�s��J���D6�u��]�\r����r@� aL:JMQ�@\\,�ǒ�lb> �z�x�b~�:��0��ӛ���c��R%�y;��i2^}H�%ӆ�YbG)��N���d�XZ���AY��gD1#Dv�w��(\0�qϡ�SV���?�o�:ti�ǙK�Z�@�����:yg̥�,�ȃ6�����Ub���p�*⛛zC�,��\rg���\r#�k����z�\r����K	��\"�`A0��mx@H �! �[����P+�9B3%WUb��;�Z�V\n��[N�[�e�Yx��i�:M��i(gv�ϥ���������s@i�;�r�es,�`q���;�-:�_L<-������Lpٻ�~�����7Q�tz��z�/�~D�萓r,üEo��o<�7q ��%��k6��\\�',o�g8?�i��\0��-G͜���7��n�/��y�6j����4�N:3S��� ��pf�nQ�\0��SPY:k���\$+��<��鲮�����{��1f�[m�qep�C���*��ӷ,\nc�2<��I�.�yӳY�9(ɍzw �/K9��k�9�	�>�y�7D�<W�t�3]�#�H�e\0�p�T�kf�W��5�އ������;j�t��\n�{g��)S�Vc�Lv!=��1��v}^t�^�ܾާ�(�:H�2G��}�Q�\r}��0�M^\$;�bZ�/�=��i��C�N{ވS����yd=��K�>G���]��@��~�\0@�Hz�>��F�^*�O�>Rs?�^��}D}B�� Pzj7쒎�&j���m��bmji���x-�j'yX��ܱ���Y�����V�qF��9\"0.�dB�>#�~J��,�����^��� ��(O@N��1���\ṟR�2����vG�Z�����wQ/��v��#j��Y\"�q��)j���U��k�?���w��1��M�[�=alEc�c��6x�����T��{�ej��/�o��uSt`R-���\0񰎯�kv��XU���G��x�\n���D J\n��:,3=�{\0P���8`��A�ҾB�'a�Z��I�\0&@H�H�O�eK��#!JzB�,���� jvH\nƀh�J�X�D�=�Yy*.dBj!��\0�\"�!��� A,_�#,���ߍ�'t{� �'��\rD!�y2 ��/��aK�KB3�9��R0K�\0�;P߶X�	n�,	Q���%�yD�Y��jA��\r\0�XB;�f�`��=h@��a�4Jb����񌆿%S�lAPm���؞��.ЛD�����L���,W���ȯBG��\r��\rS�[o�\\�^��\r�hD?��\n����H�;��?�Px�������\rJRYK	0��8z�}4�栚Q�Xr`'.�Zכ%GD,��<\0�u�-+�`n�0���.���	a�X��dA��a�[�4iՂ�� iC�C�&��sm� 7��-i�]*D��!HĔ0�qr\r��0Dҏ��H�N�N�\\��;-L\"��_p.�Ʉ�_\0ܗ�\rf&\ng��1�)ᳺͩbAL(�ξ�O��*�8�*0����mPB&�+a^p���2p�D\\�kG�;����0�����������\r�K���5��p���T�%��\n���\0%L	�N(!;��\$d��A��� �ڨ�I5�jP�`�&z�>\"J�t`n϶x�f̥|K\"�b�8Ci��w`�F~+d�\rB:_��S��L��d�(* 0�mq��L��\np�6xHP�,k�pQ�\0�XP��ַb�\n�:P{�\"`4P���2�t{�⪒��rI�k�L�\\<���m���AzOO�9�5c����h�f0A���4G�\0�N�\0���x�K2k�֞��s��/I�O:cǛ��.і8�V�>��'���D�\0������2 	�yȵ�AvY�Z*�4e9���}�+_�<�4�61	(@��T�dH;�h����zL\0ol��Z!?���(�w{�t]���q�dd_���\r�8�	��xXs9���-�[�B�ց�E�.�wC4��:v����^a~^`��W��/��B<�H�	g)���#�v�hF�V��K#]��u�r*�k�Ƞ\"��-\r���>Ep�����j���\0�L&;���P�b&ep�� �A�bԒ�k���^@L�N��\$�Q��Aa�����Gh2�o��M�*8f��ă��׌��)�A2�VY@�\0����<�VJy���҂'x��gPKI��p�L(\r�Qs�ܔ��(�Q�9n1���vE1�6���zj��?�X6�a|��V�`��jc������3��,0wB	�TNr�O�BhCIj���^ha�Rh��AS�c#��=S0V�\"i���@����@ܸ��?�Tm���[�r�.X?�I\\�4��5�9T\0002�^fފ�W�BDL�\n���E2G��ǳ|k��ƴC��#�\0����bqN��I��50��A���_��B�'����~�<�P�6F]��@t=F�\$�Nn�[�+�U4e+����HL\rg6Z )YK\nZ��� 8\r5��m�f2���(��gg6��	X3���ȟ�c�Hh�Ƹ�\\�G�O+ȼ�\\��of��[��7��y[�Oj�\\L�\\�nx\0�\0[�9K��W�\\��)R��Ү���}@`N�\0��w�?q\n\$=��\"�drb��ЇnAl3y���\nJ�l��FR���&�'\r9d�Z������t�4��Y���t�p�=B�`e�\r� ��n{4R�C��JI��_����1E1�&��]@s��U;���2*4\"���Z�4�L����tC��ie����+9��@ע�0/�2���I�y�3�7J	�P�咞iJSh���8�7����fĬbzC�ľ�� ��V��cζWt�������~��ie����K��y�y�.g\\��^=.��N��d�!{��n��TЖ��.J�(�<J��B�H�NkB���%���+(�0�\$�HH�p��\0���oX�[Nz&�JtL�<u�K؝�}9!v����C�z�<|��}ì�p��aO�k�!�d\n�uL�Q���QL�m+9�9�tj\r� � M&�hȩNRܠѿ)\0!���\"�ĆU�5Pl����+Xٮ��0��#Cw�,�.���[R�O�Ζr�,�E5����D��P�U�V���5Wt0]OSp�x:�R�^L�\n�'v���AR��*�RaA�៊ʕ�\"��m=��Tb�Z��v}�{`*��ڒ���K}\"���뙊��g	͇�1]���k:��3lE[@]r�\"+\r���)�q�aZDԏ��2�zC�!	��-��ת�`�8NY@h�`�D����<*A4��d���>��\n]��E�G�8Q�����sK�R�VG<!Q�\n|⌒��p�U�S�_�ϩ��j��Em�aq��GQ��*y%�������x��H\n�R퓘,i��΅:঎� u��Hf�XÁ�	��e�h�u��\r���+�a4�>m�/��#�I�1:&���S��z�u�c�N�@q�\$�m��O	��H<u�S�yi��WHH65hSar׼�Ewo�oa�l��S��qi[%�Q\r`�ǽ�F�o��NB�@��5�\rUtQ���P��4�]y��?CWR�v]i�i����1>̨������ZE꠶͖n\n��)��9��vv*ŞB�c[>�q֫�Bee��� �\\�`�?�N�e5�������2Y������&ԔWEm�c�t��e�l�wM	a��M�^��-���-j��,��]���c՝��W����@��t�M%4K��:��d�������uG\"0��X��H4��r\0a��2����!/�qVk\n�z�7W\r��r|���+d��\\lr@r!o�\$�����u�Zjb�'�K��ɗa\0�. ����m��v\"}h�+%�ﴛ��'p����\0eoS������Y��JN(�R�� ��!Ѕo`�`T�Ɋu>���8F��I6E�N��T\0��v��� l�#�<x�ɏ�[��{8�,N��ׂ�FD���lB[�Z�D����/�`���*kĐe]\n��2�5%�|�ex�]H �R0�,�\n����ͪ�����Y��)Ѽe�XsCv��G��E�F�*��ʳg��\0��}]��V��<m?\$�%c�����z<����xc�'�}Kٍ\$�\$hPD@`P� �\n�;ӔO~;:���	�BZ��ך��JB#�S_S���:��w6L\$c�qw��Ҫ�?\0���%�7�cӌ*`_�������!�8��`�<1c\n��C��r���8�O�]q6�rhpb�paKw»�( o�v�dW�İ�KCI�pxq0���yszLNxD��.�J����{��\0&���p�\0��6�� lwF@�����Ia��0(��[W��</�d%�eþ�1��/:,�g`��*͏�m�\r�O��ic`����nq�l�;���p#hZAK<��J��B\0���:L�Q�m�oM��0���(6�q�}\\�.W��0�c��ǔ����n��&���}���Z�s|\$D���H5�leif�O�L�Be�sS�UпpH�BY�U�@�5�U�{c�p\"�Ɗ�d-�Qۮ�V�\\\"R�m\n��\r۱�)�I)��p>����a+�~@�߱�7�-x�bܢ�!����K'E��-�Μ��4�&X��V�����\"��JxG�4��]��)��q��%x�hTVҋ>�^r` �;H�ע�	��̏\$ǖä:MO���\r��9���	�����,�~\0)�`bhhp���!΅6�}���� �_�a4Ap�ub+I)��m	2H��8r�\$v���F@1/��.(>p~ş���ݪ�uَs�0�e�+��]��³�1��d�A�C��Ձ�Lv/�v��+R��;}�M]�[�1��0�3����Zc�'��x��wO�2آ|,Ӏ��\"zleq�y��XOr�Ɂ��\">f\$L�i��729���t�\",�fw;��Δ�3����cr��R5@@W\$��,�Շ� u�i0[f;����+\\͡^Ί-!�:�K�swhp�jM���\r�^7`�T�Q]����WTcCK#�DR�3\\\\D�Jhf[ZAd*�)�b���|���� -F8ϼ!X�.�֐�]0|ϙe�t����m�ad�\"��B��\\&�Yu�T-�Hp��|A����F�M�⮰�]>}��B�U��dF2C�Em*JϹ,����W��X�wH��!�ҹi�|�� ��ߴG�!p(J���'����\"�Q�LH���)@X����\$�9\0�N�>�5-n�a-\$CW��R��D�N���F��3�A ������'�^\0�Kc����\\h��wLze����4��:]�\0��]�kb�K�\nX4x�\0/��)By��u��!�2+���5�\0�o���z�@��4m'�U�\r���n��CcHl��n����2��O:�.ȉ˷�Y�����p.��\nᐅSDN�`��q�]Fx���~�����\$	��ad��<6\rx�Z��S�V���d���Z����K�͓��bia��D���22��G1�#-��\0!/�AGp8è���g5�p����P��an��t�\0��6��#�xU\0Z,�P\";loAl��X��T3g��@�T/��ء(ѡ������G���ۡ��]�D�\\�\0�pΚ�I}!���v᫝|\nTS�#���S���j�Z�\\�7\0��\"Ľ�P����d!%\0�\\Q�@g~�D�	8�II�\$T��J��pۅ#�ݬP3n�B<!���jh�����\0�e�6Ģ]�	�S��%�ّ�r��hp��(���U�&�ҰmV��Xf�����n�W�6{@{�U�\\q���mg�{~)�ʒ�|�XK��Ғڃ�({��\":J^�0�v�@�bf��]�;����:�=^��@@\0���|���V�4b\0�ZN|K�1X@Z)��k���(8�oM3p;Crzy�G�AQ0��N���\n���q97P�\\J����V��a'�{ట���:{ە!^ir!�\"����=� |�4Ӄq'���`���J���(�<\r���`@0\$	;C�^�tT����w�w��W\\�;\0�	�H5�\0�ǒ`�7� s�D`9Bk�4����l\nq�L�&����v�^H��H���y,��9���>��v�\0:�F�|�	Qr6m�,m�\\��V�����{V�e>��o���qXpb~G�C9��Ԥ���Sj'VE���	/8�_�Nlъ�)�LT���.�v��v��FN��p��.�.#�Q%\\�Y%E�B7Z�v��tX���t�t�:5��N�0������M#k)ln�y2W�\no�e�X��x��tA\0�鱭�-yf^M��#���#��/�l2Z9�&4/,{Z*���Z8-�\r���Ui+�������\rq�`0h@\\�rަ�����ް������LXf*��6^�,VۇU��S�}m|W�@�Ν�z��K����h(�S����}��Wc����)Ռ\\ujܴ��.GH!�G���8���5�,\"5ש��hA��ѭh<�gl\n�LlUu�{8��Yz�<U�u�e�ި�Mc�M�^M��埂�oF	v���p_{YL�bt�J�N�F@���gh��]���u{W�cj�hG���I�(����9�vm;����/��\ns��堡�e��'�Z�NL�ɕ�1]P���9��4����8y�=�����'�}S�}WL�)�w��U�����ZC�+�a����õ���z�:��W�<Ϯ2��M���K������+{7����T�w�͗�ё�>�E�q�G���'o׷j�����u�hۊ�Z�N���7�O�:t	\0U0�|g�t���{��k�N���u)�s�d�Ȓ�a�ҟ�ړ���|j�u�@y�=	�.��7�t?��i�\n[v���䤾l@��%���@'!�5��Ȓ��,1Z�u��;)�[�q4At\r���8{�T��'At\r���Px�U׾_?�\\�sL�7��.߬�엶<��O�v9�9�&8\$�!\n��@P�k�֕�AI���˚��T~Gy��w�\$��+�g���n�\0`L���J�\0&���9;�I��b�r+�k��S�A��2e��S:)t�@m��� Kg)���@����\$���a�̓u���E�^�;�J�����S�d� �JS�����lD��g|�'s��δ��@Jb(t!v�a'+9t9whlC1���9RKɷUc��@N���~�Z{+���i@��Rl+�\0�-�e�H}��c��t�(������##�Ͱt��0Ƚ���<�\$E�s�U;Z�H@>|��A��!\$��\$U�wぽ�O�̔�Š���x*��!��3u��{t��0;��A*�jr�|���v��y?F�8��7jG��֠EP�a\0W%��HI�����x����7�	�� Bc�'﷜�)A��l��j��o������K�߫��V?\\���\r�(�a����{1A-ٷx��9��(�̀e��O@��0/�\r���z�\n�?�����	�������+hb\0�?*	�o�\0���'i:�pK��Ľ�����&6����Oc,\0�q/��TT���\0�ދ��d��I���j�k�bn��?6�������1=�ёc�:?t\n���-hE�\$���u��St�(5:]gÄ2��k@�V�`�� ߳w*��R��ob:��\0�b\0@~�A��~EzOS�G6\n�BF�\0BI�C��ҹ�\"!j�N`D�16Y��,1���:]k��z^�U��@qP:�h�p��p�L'��C�\$��Kރ�>{@�\"�]�\0	wI�k).I��%_\nWyi����D0:�nᲘ%z\0��;ˠ7:��R�>��.��?���J~����/�A�����~�E��3�J��V|it���Va�At����Z��8d=<s��o	,�a��:�B�J?�Ƀ�9�^٦��@�KK���:]h�Ԗ�+\0001b��\"j���⯉�l���­�n8�&\0&&\rs���S���H��N�u�X����-1Ļ8�O�,˺ҏzB�*�K-B���A���I��V(��`�a�p+�,�DBԫ%�z��Gu�@��#BF�kɆ��R�)t*Ҥ�]�\"�S��=�6<1��d��=>�:���\0�%� ��	�q\0�Ԣ͍����.!>B������C\"�����?\"!<`�C\nt3���^3�n�?��(�J�BZ�P��^x�������O�C�\r�ɡ>@{<D�L��3ۂ�=�}�.�\0�9�7;ꡤ��x��+ɺps�������U��R�k� ����9E�A^9A��[��C[%.�<2�2�@�L����?N|�xC���?N�t0%_XV��vU���}�!�h�������I��AblX\0�c��>�	\\������EN�>!	]�q\"�ëL��\0bX	`��:�-�zx0�S�C�+@��:�( q�0�Q���>�AaD��B�D.����8��	�TiYK�DEiW�ᶪ�AZ���X_�E��D`�B��.��GDtћ�P|���e�2:�Y�`Q\"�rX4I.��ZQ\n����<&���!K��#�,б�Q@<@1�Pe��|��Q~EwAfC����7��=D~N'���ʳD����9~�	a1-�B�s\"��e�� <Q��\r��lY\0004����r��ް(�#]'`���&VG�:#�][f�>D�Tت����	�������Fm\$4�	�D෻��Ymv���#ZNv�Nm�� ��Q*���h��D�PEt`��\$�\0�-�ߤT�H��+�T`ۀ��[2�v@��Z%�;JPIB6�\0[�Q_İ\"�XEP1�-�xD~�CX����)s�����LeWD2��M�\\Y��Fr�gp�D�Ӄ�5���a�<��TGtF6�Y݉G��ށ�b(�Mg�>|H@\$�� �,0<+lke��\$^����8\$\"�����^p�q����\"B*����Da6l��f��tztq:�ٴ]qMD���C�D�F�t4� ��S�8Y�s`�F�W�UQE�Whz���zd(���{�����Ћ�q��,r\$v�����՞/��/��WZ��E\rQ1�EZ��D�D	hG�)���Uo�D����Z��TJ��?<gѿ���9\0\$.P��Wi�L3+��T\\�̀ƌܨ�?�6ĺ�L��=�2h1�l2+�袽�Hӈ�1���s�>w�0��6;\$����+����H h9�����M�C�m��Vt�uM��Jv�D#�>*\0��j}�=�R�S\r�)�\0G��s��N�\n\0\"\0�� �'������f� k\0�\0�!��9�5��kC��}Pj�\"�l�4�\$;+��jMl3K���%:^L{@0�t��0��u����T#�c��\r��!��\r��i*��OѨ�#�F5;�*Є,*��0���P@�\"��5<�A(�̐�3��x��|�0BB��m����W#QDJ����`i<��Ρ)g+h)X�)<�%D>2�a  PZe/䪴'�i\$yL0�\n�\r�J��8���;z���7���� ���4O��\r�ܬ���2�σn�U�ġ\$�Q�c��-Z�5A�Om�8B\$��+	@�vj��L�\0?>�Y�26��o�ɶY�:��\n�\r����Jb��j̳�\r���'��Z�J���%��p9Z��?RX��O�/��&I���'��+��o-���#����afq��VV�%���(���FH4�R��Y�7�( �;�R0--Q)�Q2��*�A�ʟ(8�𢟘b�.�����I���ZR1?`�J����#/,���B=�FAH�0��Ӽ��J��������I���j �Jy*���fʺ�t�	���+쪲�Fء�h4��H�C�Vj��Y'H���[G`KDt�!�9VO\r�fH�j�\\ʄ����R\\��	�8I@٢+/--�^ҼKfo4�rbP�\$�E��w'4���Fu̯�%�*�L'\\�P\0J-2e4nx��ү�0��,�쭁��*؊���.`�򳰊.����%���;*�2�0�/t\"^ʆ�\$���	�-Ծ��˩,���3*כ���6�d�2��e/�6��;0l�-Q��p���ߌ�1�ܔ�\$٤\r�v��\0��@m����ܴ,�R��@��~��%Z8rW5`ɲ��]y��Lxd�y��>d���� P�R��%�:�[�%̘�V��#��,�9*��qL��5ԡ��D,q>�۷:����\0t�(�2�	q��H'��\n�kl�F��DhS4��|͈�ʔ�*�3��Hi��\nRM)/�>�M�D���#wrX1/,���1)��\n�����J�ļӠ3:����9W'�&�S��Z�k��4�^�S�� S\09��p<D��3��=3\0^����@l�����;|��:l����1`�FBX)�M�@[f���-h-��B!@oӷ�\$X%�	�%\0<�L�,Q#+/O �\nDp�ʁB�@���=��#X�S�@_�MPk�iz��B+�S���\$������G'�O�+PЧ�Vɜ���líIM�6@��'��t�o�a�؋FP�(���З�8d\0�˪f@p��O���B�9?93���>\n�\0��?^�3�2/j�������a �d���o98�P�5<�D���ɥP�rT��5��@b��F9;��~��j����k��\"����Kɀ�9l�)4�z	�q:�\"����qз��\$QH�#*��3{\"\r��I��.�짲����󵛷;l.2a�/�z3\r=��d��ؚ �y�St�7YDJ�@17�DK��ڛ�\0ӈ͉L�l�)�3��h��F+����\0�\$��D	`z���|��	�1N2�:���д��Ӊ��\rZ�RtNS,�p��f���q\0");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$Sd=substr($u,-1);return
str_replace($Sd.$Sd,$Sd,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Nf,$Jc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Nf)){foreach($X
as$Id=>$W){unset($Nf[$y][$Id]);if(is_array($W)){$Nf[$y][stripslashes($Id)]=$W;$Nf[]=&$Nf[$y][stripslashes($Id)];}else$Nf[$y][stripslashes($Id)]=($Jc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Ma=false){static$Dh=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Ma?array_flip($Dh):$Dh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$cb,$Pd="",$Se="",$hb="",$Qd=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($cb?" checked":"").($Qd?" aria-labelledby='$Qd'":"").($Se?' onclick="'.h($Se).'"':'').">";return($Pd!=""||$hb?"<label".($hb?" class='$hb'":"").">$J".h($Pd)."</label>":$J);}function
optionlist($Ye,$zg=null,$bi=false){$J="";foreach($Ye
as$Id=>$W){$Ze=array($Id=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Id).'">';$Ze=$W;}foreach($Ze
as$y=>$X)$J.='<option'.($bi||is_string($y)?' value="'.h($y).'"':'').(($bi||is_string($y)?(string)$y:$X)===$zg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Ye,$Y="",$Re=true,$Qd=""){if($Re)return"<select name='".h($C)."'".(is_string($Re)?' onchange="'.h($Re).'"':"").($Qd?" aria-labelledby='$Qd'":"").">".optionlist($Ye,$Y)."</select>";$J="";foreach($Ye
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ia,$Ye,$Y="",$_f=""){return($Ye?"<select$Ia><option value=''>$_f".optionlist($Ye,$Y,true)."</select>":"<input$Ia size='10' value='".h($Y)."' placeholder='$_f'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($t,$Xd,$mi=false,$Se=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Se)."return !toggle('fieldset-$t');\">$Xd</a></legend><div id='fieldset-$t'".($mi?"":" class='hidden'").">\n";}function
bold($Ua,$hb=""){return($Ua?" class='active $hb'":($hb?" class='$hb'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Kc=true;if($Kc)echo"{";if($y!=""){echo($Kc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Kc=false;}else{echo"\n}\n";$Kc=true;}}function
ini_bool($vd){$X=ini_get($vd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($ii,$N,$V,$G){$_SESSION["pwds"][$ii][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$th=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$th;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$tb=(is_object($h)?$h:$g);$J=array();$I=$tb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$J=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$e=escape_key($y);$J[]=$e.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$J[]=escape_key($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$ab);remove_slashes(array(&$ab));return
where($ab,$p);}function
where_link($s,$e,$Y,$Ue="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Ue:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$M=array()){$J="";foreach($f
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$Fa=convert_field($p[$y]);if($Fa)$J.=", $Fa AS ".idf_escape($y);}return$J;}function
cookiem($C,$Y,$ae=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($ae?"; expires=".gmdate("D, d M Y H:i:s",time()+$ae)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($ii,$N,$V,$m=null){global$Wb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Wb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($ii!="server"||$N!=""?urlencode($ii)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirectm($A,$pe=null){if($pe!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$pe;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$pe,$Xf=true,$vc=true,$Cc=false,$sh=""){global$g,$n,$b;if($vc){$Sg=microtime(true);$Cc=!$g->query($H);$sh=format_time($Sg);}$Qg="";if($H)$Qg=$b->messageQuery($H,$sh);if($Cc){$n=error().$Qg;return
false;}if($Xf)redirectm($A,$pe.$Qg);return
true;}function
queries($H){global$g;static$Rf=array();static$Sg;if(!$Sg)$Sg=microtime(true);if($H===null)return
array(implode("\n",$Rf),format_time($Sg));$Rf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$rc='table'){foreach($T
as$R){if(!queries("$H ".$rc($R)))return
false;}return
true;}function
queries_redirect($A,$pe,$Xf){list($Rf,$sh)=queries(null);return
query_redirect($Rf,$A,$pe,$Xf,false,!$Xf,$sh);}function
format_time($Sg){return
sprintf('%.3f s',max(0,microtime(true)-$Sg));}function
remove_from_uri($nf=""){return
substr(preg_replace("~(?<=[?&])($nf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Cb){return" ".($E==$Cb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Jb=false){$Hc=$_FILES[$y];if(!$Hc)return
null;foreach($Hc
as$y=>$X)$Hc[$y]=(array)$X;$J='';foreach($Hc["error"]as$y=>$n){if($n)return$n;$C=$Hc["name"][$y];$_h=$Hc["tmp_name"][$y];$vb=file_get_contents($Jb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$_h":$_h);if($Jb){$Sg=substr($vb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Sg,$dg))$vb=iconv("utf-16","utf-8",$vb);elseif($Sg=="\xEF\xBB\xBF")$vb=substr($vb,3);$J.=$vb."\n\n";}else$J.=$vb;}return$J;}function
upload_error($n){$me=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?'Unable to upload a file.'.($me?" ".sprintf('Maximum allowed file size is %sB.',$me):""):'File does not exist.');}function
repeat_pattern($yf,$Yd){return
str_repeat("$yf{0,65535}",$Yd/65535)."$yf{0,".($Yd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$Yd=80,$Yg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$Yd).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Yd).")($)?)",$Q,$B);return
h($B[1]).$Yg.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Nf,$od=array()){while(list($y,$X)=each($Nf)){if(!in_array($y,$od)){if(is_array($X)){foreach($X
as$Id=>$W)$Nf[$y."[$Id]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Dc=false){$J=table_status($R,$Dc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ia,$o,$Y,$lc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$he);$J=($lc!==null?"<label><input type='$U'$Ia value='$lc'".((is_array($Y)?in_array($lc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($he[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ia value='".($s+1)."'".($cb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
inputm($o,$Y,$r){global$g,$Oh,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Da=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Da[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Da);$r="json";}$gg=($x=="mssql"&&$o["auto_increment"]);if($gg&&!$_POST["save"])$r=null;$Xc=(isset($_GET["select"])||$gg?array("orig"=>'original'):array())+$b->editFunctions($o);$Ia=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($Xc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ia,$Y);else{$Kc=0;foreach($Xc
as$y=>$X){if($y===""||!$X)break;$Kc++;}$Re=($Kc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Kc > f.selectedIndex) f.selectedIndex = $Kc;\" onkeyup='keyupChange.call(this);'":"");$Ia.=$Re;$fd=(in_array($r,$Xc)||isset($Xc[$r]));echo(count($Xc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Xc,$r===null||$fd?$r:"")."</select>":nbsp(reset($Xc))).'<td>';$xd=$b->editInput($_GET["edit"],$o,$Ia,$Y);if($xd!="")echo$xd;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ia value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ia value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$he);foreach($he[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($cb?' checked':'')."$Re>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Re>";elseif(($qh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($qh&&$x!="sqlite")$Ia.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ia.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ia>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ia cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$oe=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($Oh[$o["type"]]?$Oh[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$oe+=7;echo"<input".((!$fd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($oe?" data-maxlength='$oe'":"").(preg_match('~char|binary~',$o["type"])&&$oe>20?" size='40'":"")."$Ia>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Hc=get_file("fields-$u");if(!is_string($Hc))return
false;return
q($Hc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Vb;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$Vb->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Tc=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$Tc){echo"<ul>\n";$Tc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Tc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($md,$ye=false){global$b;$J=$b->dumpHeaders($md,$ye);$lf=$_POST["output"];if($lf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($md).".$J".($lf!="file"&&!preg_match('~[^0-9a-z]~',$lf)?".$lf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$e){return($r?($r=="unixepoch"?"DATETIME($e, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$e)"):$e);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Ic=@tempnam("","");if(!$Ic)return
false;$J=dirname($Ic);unlink($Ic);}}return$J;}function
password_file($i){$Ic=get_temp_dir()."/adminer.key";$J=@file_get_contents($Ic);if($J||!$i)return$J;$Vc=@fopen($Ic,"w");if($Vc){chmod($Ic,0660);$J=rand_string();fwrite($Vc,$J);fclose($Vc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$rh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Id=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Id):"")."<td>".select_value($W,$_,$o,$rh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Pf=is_url($X))$_=(($Pf=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($rh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$rh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($ic){$Ga='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Ub='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$yf="$Ga+(\\.$Ga+)*@($Ub?\\.)+$Ub";return
is_string($ic)&&preg_match("(^$yf(,\\s*$yf)*\$)i",$ic);}function
is_url($Q){$Ub='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Ub?\\.)+$Ub(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($R,$Z,$Cd,$ad){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Cd&&($x=="sql"||count($ad)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$ad).")$H":"SELECT COUNT(*)".($Cd?" FROM (SELECT 1$H$bd) x":$H));}function
slow_query($H){global$b,$Ah;$m=$b->database();$th=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Nd=$h->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Ah,'&kill=',$Nd,'\');
}, ',1000*$th,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$th);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Uf=rand(1,1e6);return($Uf^$_SESSION["token"]).":$Uf";}function
verify_token(){list($Ah,$Uf)=explode(":",$_POST["token"]);return($Uf^$_SESSION["token"])==$Ah;}function
lzw_decompress($Qa){$Qb=256;$Ra=8;$jb=array();$ig=0;$jg=0;for($s=0;$s<strlen($Qa);$s++){$ig=($ig<<8)+ord($Qa[$s]);$jg+=8;if($jg>=$Ra){$jg-=$Ra;$jb[]=$ig>>$jg;$ig&=(1<<$jg)-1;$Qb++;if($Qb>>$Ra)$Ra++;}}$Pb=range("\0","\xFF");$J="";foreach($jb
as$s=>$ib){$hc=$Pb[$ib];if(!isset($hc))$hc=$qi.$qi[0];$J.=$hc;if($s)$Pb[]=$qi.$hc[0];$qi=$hc;}return$J;}function
on_help($ob,$Hg=0){return" onmouseover='helpMouseover(this, event, ".h($ob).", $Hg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$Wh){global$b,$x,$Ah,$n;$dh=$b->tableName(table_status1($a,true));page_header(($Wh?'Edit':'Insert'),$n,array("select"=>array($a,$dh)),$dh);if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Kb=$_GET["set"][bracket_escape($C)];if($Kb===null){$Kb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Kb,$dg))$Kb=$dg[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Wh&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Kb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($Wh&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}inputm($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Wh?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($Wh?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Ah,'">
</form>
';}global$b,$g,$Wb,$ec,$oc,$n,$Xc,$cd,$ba,$wd,$x,$ca,$Rd,$Qe,$zf,$Vg,$gd,$Ah,$Fh,$Oh,$Vh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Jc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Eh,$He=null){if(is_array($Eh)){$Bf=($He==1?0:1);$Eh=$Eh[$Bf];}$Eh=str_replace("%d","%s",$Eh);$He=format_number($He);return
sprintf($Eh,$He);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Bf=array_search("SQL",$b->operators);if($Bf!==false)unset($b->operators[$Bf]);}function
dsn($bc,$V,$G){try{parent::__construct($bc,$V,$G);}catch(Exception$tc){auth_error(h($tc->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$Ph=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Wb=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$ad,$af=array(),$z=1,$E=0,$Jf=false){global$b,$x;$Cd=(count($ad)<count($M));$H=$b->selectQueryBuild($M,$Z,$ad,$af,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$ad&&$Cd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($ad&&$Cd?"\nGROUP BY ".implode(", ",$ad):"").($af?"\nORDER BY ".implode(", ",$af):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Sg=microtime(true);$J=$this->_conn->query($H);if($Jf)echo$b->selectQuery($H,format_time($Sg));return$J;}function
delete($R,$Sf,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($H,$Sf):" $H$Sf"));}function
update($R,$O,$Sf,$z=0,$Ag="\n"){$gi=array();foreach($O
as$y=>$X)$gi[]="$y = $X";$H=table($R)." SET$Ag".implode(",$Ag",$gi);return
queries("UPDATE".($z?limit1($H,$Sf):" $H$Sf"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Hf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Wb["sqlite"]="SQLite 3";$Wb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Ef=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Ic){$this->_link=new
SQLite3($Ic);$ji=$this->_link->version();$this->server_info=$ji["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Ic){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Ic);}function
query($H,$Ph=false){$ve=($Ph?"unbufferedQuery":"query");$I=@$this->_link->$ve($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$yf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($yf\\.)?$yf\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Ic){$this->dsn(DRIVER.":$Ic","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Ic){if(is_readable($Ic)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Ic)?$Ic:dirname($_SERVER["SCRIPT_FILENAME"])."/$Ic")." AS a")){parent::__construct($Ic);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Hf){$gi=array();foreach($L
as$O)$gi[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$gi));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$Ag=" "){return" $H$Z".($z!==null?$Ag."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$mb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$J=array();$Hf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Kb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Kb,$B)?str_replace("''","'",$B[1]):($Kb=="NULL"?null:$Kb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Hf!="")$J[$Hf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Hf=$C;}}$Qg=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Qg,$he,PREG_SET_ORDER);foreach($he
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Qg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Qg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$he,PREG_SET_ORDER);foreach($he
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($R)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Rg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$C=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$rg){$v["columns"][]=$rg["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Rg[$C],$dg)){preg_match_all('/("[^"]*+")+( DESC)?/',$dg[2],$he);foreach($he[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
viewm($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Bc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Bc)\$~",$C)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Bc));return
false;}return
true;}function
create_database($m,$d){global$g;if(file_exists($m)){$g->error='File exists.';return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$tc){$g->error=$tc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($C,$d){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error='File exists.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$Pc,$qb,$mc,$d,$Ka,$tf){$ai=($R==""||$Pc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$ai=true;break;}}$c=array();$jf=array();foreach($p
as$o){if($o[1]){$c[]=($ai?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$jf[$o[0]]=$o[1][0];}}if(!$ai){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$jf,$Pc))return
false;if($Ka)queries("UPDATE sqlite_sequence SET seq = $Ka WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$jf,$Pc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$jf[$y]=idf_escape($y);}}$If=false;foreach($p
as$o){if($o[6])$If=true;}$Zb=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$Zb[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Ld=>$v){$f=array();foreach($v["columns"]as$y=>$e){if(!$jf[$e])continue
2;$f[]=$jf[$e].($v["descs"][$y]?" DESC":"");}if(!$Zb[$Ld]){if($v["type"]!="PRIMARY"||!$If)$w[]=array($v["type"],$Ld,$f);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Pc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Ld=>$q){foreach($q["source"]as$y=>$e){if(!$jf[$e])continue
2;$q["source"][$y]=idf_unescape($jf[$e]);}if(!isset($Pc[" $Ld"]))$Pc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Pc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($jf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$jf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($jf)))." FROM ".table($R)))return
false;$Lh=array();foreach(triggers($R)as$Jh=>$uh){$Ih=trigger($Jh);$Lh[]="CREATE TRIGGER ".idf_escape($Jh)." ".implode(" ",$uh)." ON ".table($C)."\n$Ih[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($Lh
as$Ih){if(!queries($Ih))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $f";}function
alter_indexes($R,$c){foreach($c
as$Hf){if($Hf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($li){return
apply_queries("DROP VIEW",$li);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$li,$lh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Kh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Kh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Je=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Je?" OF":""),"Of"=>($Je[0]=='`'||$Je[0]=='"'?idf_unescape($Je):$Je),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$J=array();$Kh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Kh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($vg){return
true;}function
create_sql($R,$Ka){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$J.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$Wg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$g->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Xe){list($y,$X)=explode("=",$Xe,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Ec){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Ec);}$x="sqlite";$Oh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Vg=array_keys($Oh);$Vh=array();$Ve=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Xc=array("hex","length","lower","round","unixepoch","upper");$cd=array("avg","count","count distinct","group_concat","max","min","sum");$ec=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Wb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Ef=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($pc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$ji=pg_version($this->_link);$this->server_info=$ji["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$Ph=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Hf){global$g;foreach($L
as$O){$Wh=array();$Z=array();foreach($O
as$y=>$X){$Wh[]="$y = $X";if(isset($Hf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Wh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Oh,$Vg;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$Vg['Strings'][]="json";$Oh["json"]=4294967295;if($g->server_info>=9.4){$Vg['Strings'][]="jsonb";$Oh["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$Ag=" "){return" $H$Z".($z!==null?$Ag."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$mb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($C!=""?"AND relname = ".q($C):"ORDER BY c.oid"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$Ba=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$Yd,$K["length"],$va,$Ea)=$B;$K["length"].=$Ea;$bb=$U.$va;if(isset($Ba[$bb])){$K["type"]=$Ba[$bb];$K["full_type"]=$K["type"].$Yd.$Ea;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$Yd.$va.$Ea;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$eh=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $eh AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $eh AND ci.oid = i.indexrelid",$h)as$K){$eg=$K["relname"];$J[$eg]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$eg]["columns"]=array();foreach(explode(" ",$K["indkey"])as$sd)$J[$eg]["columns"][]=$f[$sd];$J[$eg]["descs"]=array();foreach(explode(" ",$K["indoption"])as$td)$J[$eg]["descs"][]=($td&1?'1':null);$J[$eg]["lengths"]=array();}return$J;}function
foreign_keys($R){global$Qe;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$ge)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ge[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ge[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Qe)~",$B[4],$ge)?$ge[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Qe)~",$B[4],$ge)?$ge[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
viewm($C){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($C).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$p,$Pc,$qb,$mc,$d,$Ka,$tf){$c=array();$Rf=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$fi=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Rf[]="ALTER TABLE ".table($R)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$fi!="")$Rf[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($fi!=""?substr($fi,9):"''");}}$c=array_merge($c,$Pc);if($R=="")array_unshift($Rf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Rf,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$Rf[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$qb!="")$Rf[]="COMMENT ON TABLE ".table($C)." IS ".q($qb);if($Ka!=""){}foreach($Rf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$Xb=array();$Rf=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Xb[]=idf_escape($X[1]);else$Rf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($Rf,"ALTER TABLE ".table($R).implode(",",$i));if($Xb)array_unshift($Rf,"DROP INDEX ".implode(", ",$Xb));foreach($Rf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($li){return
drop_tables($li);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$li,$lh){foreach(array_merge($T,$li)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($lh)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$dg))return$dg[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($ug){global$g,$Oh,$Vg;$J=$g->query("SET search_path TO ".idf_escape($ug));foreach(types()as$U){if(!isset($Oh[$U])){$Oh[$U]=0;$Vg['User types'][]=$U;}}return$J;}function
create_sql($R,$Ka){global$g;$J='';$kg=array();$Cg=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$Nc=foreign_keys($R);ksort($Nc);$Lh=triggers($R);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Gc=>$o){$qf=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$kg[]=$qf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$he)){$Bg=$he[1];$Pg=reset(get_rows("SELECT * FROM $Bg"));$Cg[]="CREATE SEQUENCE $Bg INCREMENT $Pg[increment_by] MINVALUE $Pg[min_value] MAXVALUE $Pg[max_value] START ".($Ka?$Pg['last_value']:1)." CACHE $Pg[cache_value];";}}if(!empty($Cg))$J=implode("\n\n",$Cg)."\n\n$J";foreach($w
as$qd=>$v){switch($v['type']){case'UNIQUE':$kg[]="CONSTRAINT ".idf_escape($qd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$kg[]="CONSTRAINT ".idf_escape($qd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Nc
as$Mc=>$Lc)$kg[]="CONSTRAINT ".idf_escape($Mc)." $Lc[definition] ".($Lc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$kg)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$qd=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($qd)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Gc=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Gc)." IS ".q($o['comment']).";";}foreach($Lh
as$Hh=>$Gh){$Ih=trigger($Hh,$P['Name']);$J.="\n\nCREATE TRIGGER ".idf_escape($Ih['Trigger'])." $Ih[Timing] $Ih[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Ih[Type] $Ih[Statement];";}return
rtrim($J,';');}function
trigger_sql($R,$Wg){$J="";return
false;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Ec){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Ec);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$Oh=array();$Vg=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Oh+=$X;$Vg[$y]=array_keys($X);}$Vh=array();$Ve=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Xc=array("char_length","lower","round","to_hex","to_timestamp","upper");$cd=array("avg","count","count distinct","max","min","sum");$ec=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Wb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Ef=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($pc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$Ph=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$Ag=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$mb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$wg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $wg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $wg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$Yd="$K[DATA_PRECISION],$K[DATA_SCALE]";if($Yd==",")$Yd=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($Yd?"($Yd)":""),"type"=>strtolower($U),"length"=>$Yd,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$qd=$K["INDEX_NAME"];$J[$qd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$qd]["columns"][]=$K["COLUMN_NAME"];$J[$qd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$qd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
viewm($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$p,$Pc,$qb,$mc,$d,$Ka,$tf){$c=$Xb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Xb[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$Xb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Xb).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($li){return
apply_queries("DROP VIEW",$li);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($vg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($vg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Ec){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Ec);}$x="oracle";$Oh=array();$Vg=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Oh+=$X;$Vg[$y]=array_keys($X);}$Vh=array();$Ve=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Xc=array("length","lower","round","upper");$cd=array("avg","count","count distinct","max","min","sum");$ec=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Wb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Ef=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$ud=sqlsrv_server_info($this->_link);$this->server_info=$ud['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Ph=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$Ph=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Hf){foreach($L
as$O){$Wh=array();$Z=array();foreach($O
as$y=>$X){$Wh[]="$y = $X";if(isset($Hf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Wh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($H,$Z,$z,$D=0,$Ag=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$mb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$Yd=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($Yd?"($Yd)":""),"type"=>$U,"length"=>$Yd,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
viewm($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$p,$Pc,$qb,$mc,$d,$Ka,$tf){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Pc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($R).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Pc)$c[""]=$Pc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$Xb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Xb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Xb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Xb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($li){return
queries("DROP VIEW ".implode(", ",array_map('table',$li)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$li,$lh){return
apply_queries("ALTER SCHEMA ".idf_escape($lh)." TRANSFER",array_merge($T,$li));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($ug){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Ec){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Ec);}$x="mssql";$Oh=array();$Vg=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Oh+=$X;$Vg[$y]=array_keys($X);}$Vh=array();$Ve=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Xc=array("len","lower","round","upper");$cd=array("avg","count","count distinct","max","min","sum");$ec=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Wb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Ef=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$Yh=explode(':',$N);$this->service_link=ibase_service_attach($Yh[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$Ph=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Oc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$Ag=" "){$J='';$J.=($z!==null?$Ag."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$mb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Dc=false){global$g;$J=array();$Eb=tables_list();foreach($Eb
as$v=>$X){$v=trim($v);$J[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$J[$v];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$h=null){$J=array();return$J;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ug){return
true;}function
support($Ec){return
preg_match("~^(columns|sql|status|table)$~",$Ec);}$x="firebird";$Ve=array("=");$Xc=array();$cd=array();$ec=array();}$Wb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Ef=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$Ph=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Zg=0;foreach($I
as$Gd)$Zg+=$Gd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Zg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Gd){$K=array();if($Gd->Name!='')$K['itemName()']=(string)$Gd->Name;foreach($Gd->Attribute
as$Ha){$C=$this->_processValue($Ha->Name);$Y=$this->_processValue($Ha->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($hc){return(is_object($hc)&&$hc['encoding']=='base64'?base64_decode($hc):(string)$hc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Md=array_keys($this->_rows[0]);return(object)array('name'=>$Md[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Hf="itemName()";function
_chunkRequest($nd,$ua,$F,$xc=array()){global$g;foreach(array_chunk($nd,25)as$fb){$of=$F;foreach($fb
as$s=>$t){$of["Item.$s.ItemName"]=$t;foreach($xc
as$y=>$X)$of["Item.$s.$y"]=$X;}if(!sdb_request($ua,$of))return
false;}$g->affected_rows=count($nd);return
true;}function
_extractIds($R,$Sf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Sf,$he))$J=array_map('idf_unescape',$he[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$Sf.($z?" LIMIT 1":"")))as$Gd)$J[]=$Gd->Name;}return$J;}function
select($R,$M,$Z,$ad,$af=array(),$z=1,$E=0,$Jf=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$ad,$af,$z,$E,$Jf);$g->next=0;return$J;}function
delete($R,$Sf,$z=0){return$this->_chunkRequest($this->_extractIds($R,$Sf,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$Sf,$z=0,$Ag="\n"){$Lb=array();$yd=array();$s=0;$nd=$this->_extractIds($R,$Sf,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$nd))$Lb["Attribute.".count($Lb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Id=>$W){$yd["Attribute.$s.Name"]=$y;$yd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Id)$yd["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$yd||$this->_chunkRequest(($t!=""?array($t):$nd),'BatchPutAttributes',$F,$yd))&&(!$Lb||$this->_chunkRequest($nd,'BatchDeleteAttributes',$F,$Lb));}function
insert($R,$O){$F=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($R,$L,$Hf){foreach($L
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Ec){return
preg_match('~sql~',$Ec);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$mb){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Dc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Dc){$ue=sdb_request('DomainMetadata',array('DomainName'=>$R));if($ue){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$ue->$X;}}if($C!="")return$K;$J[$R]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($H,$Z,$z,$D=0,$Ag=" "){return" $H$Z".($z!==null?$Ag."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$Pc,$qb,$mc,$d,$Ka,$tf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Aa,$Eb,$y,$Wf=false){$Ta=64;if(strlen($y)>$Ta)$y=pack("H*",$Aa($y));$y=str_pad($y,$Ta,"\0");$Jd=$y^str_repeat("\x36",$Ta);$Kd=$y^str_repeat("\x5C",$Ta);$J=$Aa($Kd.pack("H*",$Aa($Jd.$Eb)));if($Wf)$J=pack("H*",$J);return$J;}function
sdb_request($ua,$F=array()){global$b,$g;list($kd,$F['AWSAccessKeyId'],$xg)=$b->credentials();$F['Action']=$ua;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$kd)."\n/\n$H",$xg,true)));@ini_set('track_errors',1);$Hc=@file_get_contents((preg_match('~^https?://~',$kd)?$kd:"http://$kd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Hc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$ri=simplexml_load_string($Hc);if(!$ri){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($ri->Errors){$n=$ri->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$kh=$ua."Result";return($ri->$kh?$ri->$kh:true);}function
sdb_request_all($ua,$kh,$F=array(),$th=0){$J=array();$Sg=($th?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$ri=sdb_request($ua,$F);if(!$ri)break;foreach($ri->$kh
as$hc)$J[]=$hc;if($z&&count($J)>=$z){$_GET["next"]=$ri->NextToken;break;}if($th&&microtime(true)-$Sg>$th)return
false;$F['NextToken']=$ri->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($ri->NextToken);return$J;}$x="simpledb";$Ve=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Xc=array();$cd=array("count");$ec=array(array("json"));}$Wb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Ef=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$Ye=array();if($V!=""){$Ye["username"]=$V;$Ye["password"]=$G;}if($m!="")$Ye["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$Ye);return
true;}catch(Exception$tc){$this->error=$tc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$tc){$this->error=$tc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Gd){$K=array();foreach($Gd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Md=array_keys($this->_rows[0]);$C=$Md[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Hf="_id";function
select($R,$M,$Z,$ad,$af=array(),$z=1,$E=0,$Jf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Mg=array();foreach($af
as$X){$X=preg_replace('~ DESC$~','',$X,1,$_b);$Mg[$X]=($_b?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Mg)->limit(+$z)->skip($E*$z));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$tc){$this->_conn->error=$tc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Oc){global$g;$J=array();$Ib=$g->_link->listDBs();foreach($Ib['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$mb){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Dc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($C==$R)return$J[$R];}return$J;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$g;foreach($l
as$m){$hg=$g->_link->selectDB($m)->drop();if(!$hg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Ob=array();foreach($v["key"]as$e=>$U)$Ob[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Ob,);}return$J;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$C,$p,$Pc,$qb,$mc,$d,$Ka,$tf){global$g;if($R==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$hg=$g->_db->selectCollection($R)->drop();if(!$hg['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$hg=$g->_db->selectCollection($R)->remove();if(!$hg['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$_b);$f[$e]=($_b?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Ec){return
preg_match("~database|indexes~",$Ec);}$x="mongo";$Ve=array("=");$Xc=array();$cd=array();$ec=array(array("json"));}$Wb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Ef=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($wf,$vb=array(),$ve='GET'){@ini_set('track_errors',1);$Hc=@file_get_contents($this->_url.'/'.ltrim($wf,'/'),false,stream_context_create(array('http'=>array('method'=>$ve,'content'=>json_encode($vb),'ignore_errors'=>1,))));if(!$Hc){$this->error=$php_errormsg;return$Hc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Hc;return
false;}$J=json_decode($Hc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$ub=get_defined_constants(true);foreach($ub['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($wf,$vb=array(),$ve='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($wf,'/'),$vb,$ve);}function
connect($N,$V,$G){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$G@$B[2]/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$ad,$af=array(),$z=1,$E=0,$Jf=false){global$b;$Eb=array();$H="$R/_search";if($M!=array("*"))$Eb["fields"]=$M;if($af){$Mg=array();foreach($af
as$kb){$kb=preg_replace('~ DESC$~','',$kb,1,$_b);$Mg[]=($_b?array($kb=>"desc"):$kb);}$Eb["sort"]=$Mg;}if($z){$Eb["size"]=+$z;if($E)$Eb["from"]=($E*$z);}foreach($Z
as$X){list($kb,$Te,$X)=explode(" ",$X,3);if($kb=="_id")$Eb["query"]["ids"]["values"][]=$X;elseif($kb.$X!=""){$oh=array("term"=>array(($kb!=""?$kb:"_all")=>$X));if($Te=="=")$Eb["query"]["filtered"]["filter"]["and"][]=$oh;else$Eb["query"]["filtered"]["query"]["bool"]["must"][]=$oh;}}if($Eb["query"]&&!$Eb["query"]["filtered"]["query"]&&!$Eb["query"]["ids"])$Eb["query"]["filtered"]["query"]=array("match_all"=>array());$Sg=microtime(true);$wg=$this->_conn->query($H,$Eb);if($Jf)echo$b->selectQuery("$H: ".print_r($Eb,true),format_time($Sg));if(!$wg)return
false;$J=array();foreach($wg['hits']['hits']as$jd){$K=array();if($M==array("*"))$K["_id"]=$jd["_id"];$p=$jd['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$jd['fields'][$y];}foreach($p
as$y=>$X){if($Eb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Ec){return
preg_match("~database|table|columns~",$Ec);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$mb){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Dc=false){global$g;$wg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($wg){foreach($wg["facets"]["count_by_type"]["terms"]as$R){$J[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($C!=""&&$C==$R["term"])return$J[$C];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$ee=$I[$R]['properties'];if(!$ee)$ee=$I[$g->_db]['mappings'][$R]['properties'];if($ee){foreach($ee
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$g;$J=true;foreach($T
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}$x="elastic";$Ve=array("=","query");$Xc=array();$cd=array();$ec=array(array("json"));}$Wb=array("server"=>"MySQL")+$Wb;if(!defined("DRIVER")){$Ef=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Af=null,$Lg=null){mysqli_report(MYSQLI_REPORT_OFF);list($kd,$Af)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$kd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Af)?$Af:ini_get("mysqli.default_port")),(!is_numeric($Af)?$Af:$Lg));return$J;}function
set_charset($Za){if(parent::set_charset($Za))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Za");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Za){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Za,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Za");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$Ph=false){$I=@($Ph?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($Za){$this->query("SET NAMES $Za");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Ph=false){$this->setAttribute(1000,!$Ph);return
parent::query($H,$Ph);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Hf){$f=array_keys(reset($L));$Ff="INSERT INTO ".table($R)." (".implode(", ",$f).") VALUES\n";$gi=array();foreach($f
as$y)$gi[$y]="$y = VALUES($y)";$Yg="\nON DUPLICATE KEY UPDATE ".implode(", ",$gi);$gi=array();$Yd=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($gi&&(strlen($Ff)+$Yd+strlen($Y)+strlen($Yg)>1e6)){if(!queries($Ff.implode(",\n",$gi).$Yg))return
false;$gi=array();$Yd=0;}$gi[]=$Y;$Yd+=strlen($Y)+2;}return
queries($Ff.implode(",\n",$gi).$Yg);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Oh,$Vg;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$Vg['Strings'][]="json";$Oh["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($sg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$sg;return$J;}function
get_databases($Oc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Oc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$Ag=" "){return" $H$Z".($z!==null?$Ag."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$mb){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$mb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Dc=false){global$g;$J=array();foreach(get_rows($Dc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$C=$K["Key_name"];$J[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$C]["columns"][]=$K["Column_name"];$J[$C]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$C]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$Qe;static$yf='`(?:[^`]|``)+`';$J=array();$Ab=$g->result("SHOW CREATE TABLE ".table($R),1);if($Ab){preg_match_all("~CONSTRAINT ($yf) FOREIGN KEY ?\\(((?:$yf,? ?)+)\\) REFERENCES ($yf)(?:\\.($yf))? \\(((?:$yf,? ?)+)\\)(?: ON DELETE ($Qe))?(?: ON UPDATE ($Qe))?~",$Ab,$he,PREG_SET_ORDER);foreach($he
as$B){preg_match_all("~$yf~",$B[2],$Ng);preg_match_all("~$yf~",$B[5],$lh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Ng[0]),"target"=>array_map('idf_unescape',$lh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
viewm($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$d){$J=false;if(create_database($C,$d)){$fg=array();foreach(tables_list()as$R=>$U)$fg[]=table($R)." TO ".idf_escape($C).".".table($R);$J=(!$fg||queries("RENAME TABLE ".implode(", ",$fg)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$La=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$La="";break;}if($v["type"]=="PRIMARY")$La=" UNIQUE";}}return" AUTO_INCREMENT$La";}function
alter_table($R,$C,$p,$Pc,$qb,$mc,$d,$Ka,$tf){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Pc);$P=($qb!==null?" COMMENT=".q($qb):"").($mc?" ENGINE=".q($mc):"").($d?" COLLATE ".q($d):"").($Ka!=""?" AUTO_INCREMENT=$Ka":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$tf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);return($c||$tf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$tf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($li){return
queries("DROP VIEW ".implode(", ",array_map('table',$li)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$li,$lh){$fg=array();foreach(array_merge($T,$li)as$R)$fg[]=table($R)." TO ".idf_escape($lh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$fg));}function
copy_tables($T,$li,$lh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($lh==DB?table("copy_$R"):idf_escape($lh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($li
as$R){$C=($lh==DB?table("copy_$R"):idf_escape($lh).".".table($R));$ki=viewm($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $ki[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$oc,$wd,$Oh;$Ba=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Nh="((".implode("|",array_merge(array_keys($Oh),$Ba)).")\\b(?:\\s*\\(((?:[^'\")]|$oc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$yf="\\s*(".($U=="FUNCTION"?"":$wd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Nh";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$yf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Nh\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$yf\\s*,?~is",$B[1],$he,PREG_SET_ORDER);foreach($he
as$nf){$C=str_replace("``","`",$nf[2]).$nf[3];$p[]=array("field"=>$C,"type"=>strtolower($nf[5]),"length"=>preg_replace_callback("~$oc~s",'normalize_enum',$nf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$nf[8] $nf[7]"))),"null"=>1,"full_type"=>$nf[4],"inout"=>strtoupper($nf[1]),"collation"=>strtolower($nf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ug){return
true;}function
create_sql($R,$Ka){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$Ka)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$Wg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($Wg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($U){return
get_rows("SHOW $U STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Ec){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Ec);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$Oh=array();$Vg=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Oh+=$X;$Vg[$y]=array_keys($X);}$Vh=array("unsigned","zerofill","unsigned zerofill");$Ve=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Xc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$cd=array("avg","count","count distinct","group_concat","max","min","sum");$ec=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.3.1";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Oc=true){return
get_databases($Oc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Wb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Wb,DRIVER),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($ce,$G){global$x;if($x=="sqlite")return
sprintf('<a href="https://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to use SQLite.','<code>login()</code>');return
true;}function
tableName($ch){return
h($ch["Name"]);}function
fieldName($o,$af=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($ch,$O=""){echo'<p class="links">';$be=array("select"=>'Select data');if(support("table")||support("indexes"))$be["table"]='Show structure';if(support("table")){if(is_view($ch))$be["view"]='Alter view';else$be["create"]='Alter table';}if($O!==null)$be["edit"]='New item';foreach($be
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($ch["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$bh){return
array();}function
backwardKeysPrint($Na,$K){}function
selectQuery($H,$sh){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($sh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Qc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$if){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(array('%d byte','%d bytes'),strlen($if))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($o["default"])?" <span title='".'Default value'."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$Jf=array();foreach($v["columns"]as$y=>$X)$Jf[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$Jf)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$f){global$Xc,$cd;print_fieldset("select",'Select',$M);$s=0;$M[""]=array();foreach($M
as$y=>$X){$X=$_GET["columns"][$y];$e=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Xc||$cd?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array('Functions'=>$Xc,'Aggregation'=>$cd)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$w){print_fieldset("search",'Search',$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ya="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Ya'",$f,$X["col"],"(".'anywhere'.")"),html_select("where[$s][op]",$this->operators,$X["op"],$Ya),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($af,$f,$w){print_fieldset("sort",'Sort',$af);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),'descending')."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$f),checkbox("desc[$s]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($rh){if($rh!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($rh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($w
as$v){$Db=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Db)$f[$Db]=1;}$f[""]=1;foreach($f
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($jc,$f){}function
selectColumnsProcess($f,$w){global$Xc,$cd;$M=array();$ad=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Xc)||in_array($X["fun"],$cd)))){$M[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$cd))$ad[]=$M[$y];}}return
array($M,$ad);}function
selectSearchProcess($p,$w){global$g,$x;$J=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$sb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$pd=process_length($X["val"]);$sb.=" ".($pd!=""?$pd:"(NULL)");}elseif($X["op"]=="SQL")$sb=" $X[val]";elseif($X["op"]=="LIKE %%")$sb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$sb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$sb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$sb;else{$nb=array();foreach($p
as$C=>$o){$Ed=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Ed)){$C=idf_escape($C);$nb[]=($x=="sql"&&$Ed&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($nb?"(".implode("$sb OR ",$nb)."$sb)":"0");}}}return$J;}function
selectOrderProcess($p,$w){$J=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Qc){return
false;}function
selectQueryBuild($M,$Z,$ad,$af,$z,$E){return"";}function
messageQuery($H,$sh){global$x;restart_session();$hd=&get_session("queries");$t="sql-".count($hd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$hd[$_GET["db"]][]=array($H,time(),$sh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".'SQL command'."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($H,1000).'</code></pre>'.($sh?" <span class='time'>($sh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($hd[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editFunctions($o){global$ec;$J=($o["null"]?"NULL/":"");foreach($ec
as$y=>$Xc){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Xc
as$yf=>$X){if(!$yf||preg_match("~$yf~",$o["type"]))$J.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($R,$o,$Ia,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ia value='-1' checked><i>".'original'."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ia value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ia,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$Wg,$Fd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Wg)dump_csv(array_keys(fields($R)));}else{if($Fd==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($i);if($Wg&&$i){if($Wg=="DROP+CREATE"||$Fd==1)echo"DROP ".($Fd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Fd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$Wg,$H){global$g,$x;$je=($x=="sqlite"?0:1048576);if($Wg){if($_POST["format"]=="sql"){if($Wg=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$yd="";$Wa="";$Md=array();$Yg="";$Fc=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Fc()){if(!$Md){$gi=array();foreach($K
as$X){$o=$I->fetch_field();$Md[]=$o->name;$y=idf_escape($o->name);$gi[]="$y = VALUES($y)";}$Yg=($Wg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$gi):"").";\n";}if($_POST["format"]!="sql"){if($Wg=="table"){dump_csv($Md);$Wg="INSERT";}dump_csv($K);}else{if(!$yd)$yd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Md)).") VALUES";foreach($K
as$y=>$X){$o=$p[$y];$K[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$sg=($je?"\n":" ")."(".implode(",\t",$K).")";if(!$Wa)$Wa=$yd.$sg;elseif(strlen($Wa)+4+strlen($sg)+strlen($Yg)<$je)$Wa.=",$sg";else{echo$Wa.$Yg;$Wa=$yd.$sg;}}}if($Wa)echo$Wa.$Yg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($md){return
friendly_url($md!=""?$md:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($md,$ye=false){$lf=$_POST["output"];$_c=(preg_match('~sql~',$_POST["format"])?"sql":($ye?"tar":"csv"));header("Content-Type: ".($lf=="gz"?"application/x-gzip":($_c=="tar"?"application/x-tar":($_c=="sql"||$lf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($lf=="gz")ob_start('ob_gzencode',1e6);return$_c;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($xe){global$ia,$x,$Wb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($xe=="auth"){$Kc=true;foreach((array)$_SESSION["pwds"]as$ii=>$Fg){foreach($Fg
as$N=>$di){foreach($di
as$V=>$G){if($G!==null){if($Kc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Kc=false;}$Ib=$_SESSION["db"][$ii][$N][$V];foreach(($Ib?array_keys($Ib):array(""))as$m)echo"<a href='".h(auth_url($ii,$N,$V,$m))."'>($Wb[$ii]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$xe&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.3.1",'"></script>
';if(support("sql")){echo'<script type="text/javascript">
';if($T){$be=array();foreach($T
as$R=>$U)$be[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$be).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($xe);if(DB==""||!$xe){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}if($_GET["ns"]!==""&&!$xe&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";if(!$T)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($T);}}}function
databasesPrint($xe){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Gb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".'database'."'>DB</span>: ".($l?"<select name='db'$Gb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($l?" class='hidden'":"").">\n";if($xe!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".'Schema'.": <select name='ns'$Gb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".'select'."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".'Show structure'."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Ve;function
page_header($vh,$n="",$Va=array(),$wh=""){global$ca,$ia,$b,$Wb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$xh=$vh.($wh!=""?": $wh":"");$yh=strip_tags($xh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$yh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
';if(ADMINER_THEME!=''){echo'<link rel="stylesheet" type="text/css" href="',ADMINER_THEME,'">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('You are offline.'),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Va!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Wb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Va===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Va)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Va)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Va
as$y=>$X){$Nb=(is_array($X)?$X[1]:h($X));if($Nb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Nb</a> &raquo; ";}}echo"$vh\n";}}echo"<h2>$xh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Xh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$te=$_SESSION["messages"][$Xh];if($te){echo"<div class='message'>".implode("</div>\n<div class='message'>",$te)."</div>\n";unset($_SESSION["messages"][$Xh]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($xe=""){global$b,$Ah;echo'</div>

';if($xe!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$Ah,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($xe);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($_e){while($_e>=2147483648)$_e-=4294967296;while($_e<=-2147483649)$_e+=4294967296;return(int)$_e;}function
long2str($W,$ni){$sg='';foreach($W
as$X)$sg.=pack('V',$X);if($ni)return
substr($sg,0,end($W));return$sg;}function
str2long($sg,$ni){$W=array_values(unpack('V*',str_pad($sg,4*ceil(strlen($sg)/4),"\0")));if($ni)$W[]=strlen($sg);return$W;}function
xxtea_mx($ti,$si,$Zg,$Id){return
int32((($ti>>5&0x7FFFFFF)^$si<<2)+(($si>>3&0x1FFFFFFF)^$ti<<4))^int32(($Zg^$si)+($Id^$ti));}function
encrypt_string($Ug,$y){if($Ug=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Ug,true);$_e=count($W)-1;$ti=$W[$_e];$si=$W[0];$Qf=floor(6+52/($_e+1));$Zg=0;while($Qf-->0){$Zg=int32($Zg+0x9E3779B9);$dc=$Zg>>2&3;for($mf=0;$mf<$_e;$mf++){$si=$W[$mf+1];$ze=xxtea_mx($ti,$si,$Zg,$y[$mf&3^$dc]);$ti=int32($W[$mf]+$ze);$W[$mf]=$ti;}$si=$W[0];$ze=xxtea_mx($ti,$si,$Zg,$y[$mf&3^$dc]);$ti=int32($W[$_e]+$ze);$W[$_e]=$ti;}return
long2str($W,false);}function
decrypt_string($Ug,$y){if($Ug=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Ug,false);$_e=count($W)-1;$ti=$W[$_e];$si=$W[0];$Qf=floor(6+52/($_e+1));$Zg=int32($Qf*0x9E3779B9);while($Zg){$dc=$Zg>>2&3;for($mf=$_e;$mf>0;$mf--){$ti=$W[$mf-1];$ze=xxtea_mx($ti,$si,$Zg,$y[$mf&3^$dc]);$si=int32($W[$mf]-$ze);$W[$mf]=$si;}$ti=$W[$_e];$ze=xxtea_mx($ti,$si,$Zg,$y[$mf&3^$dc]);$si=int32($W[0]-$ze);$W[0]=$si;$Zg=int32($Zg-0x9E3779B9);}return
long2str($W,true);}$g='';$gd=$_SESSION["token"];if(!$gd)$_SESSION["token"]=rand(1,1e6);$Ah=get_token();$zf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$zf[$y]=$X;}}function
add_invalid_login(){global$b;$Ic=get_temp_dir()."/adminer.invalid";$Vc=@fopen($Ic,"r+");if(!$Vc){$Vc=@fopen($Ic,"w");if(!$Vc)return;}flock($Vc,LOCK_EX);$Ad=unserialize(stream_get_contents($Vc));$sh=time();if($Ad){foreach($Ad
as$Bd=>$X){if($X[0]<$sh)unset($Ad[$Bd]);}}$_d=&$Ad[$b->bruteForceKey()];if(!$_d)$_d=array($sh+30*60,0);$_d[1]++;$Dg=serialize($Ad);rewind($Vc);fwrite($Vc,$Dg);ftruncate($Vc,strlen($Dg));flock($Vc,LOCK_UN);fclose($Vc);}$Ja=$_POST["auth"];if($Ja){$Ad=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$_d=$Ad[$b->bruteForceKey()];$Fe=($_d[1]>30?$_d[0]-time():0);if($Fe>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($Fe/60)));session_regenerate_id();$ii=$Ja["driver"];$N=$Ja["server"];$V=$Ja["username"];$G=(string)$Ja["password"];$m=$Ja["db"];set_password($ii,$N,$V,$G);$_SESSION["db"][$ii][$N][$V][$m]=true;if($Ja["permanent"]){$y=base64_encode($ii)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Kf=$b->permanentLogin(true);$zf[$y]="$y:".base64_encode($Kf?encrypt_string($G,$Kf):"");cookiem("adminer_permanent",implode(" ",$zf));}if(count($_POST)==1||DRIVER!=$ii||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirectm(auth_url($ii,$N,$V,$m));}elseif($_POST["logout"]){if($gd&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirectm(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($zf&&!$_SESSION["pwds"]){session_regenerate_id();$Kf=$b->permanentLogin();foreach($zf
as$y=>$X){list(,$gb)=explode(":",$X);list($ii,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($ii,$N,$V,decrypt_string(base64_decode($gb),$Kf));$_SESSION["db"][$ii][$N][$V][$m]=true;}}function
unset_permanent(){global$zf;foreach($zf
as$y=>$X){list($ii,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($ii==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($zf[$y]);}cookiem("adminer_permanent",implode(" ",$zf));}function
auth_error($n){global$b,$gd;$Gg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Gg]||$_GET[$Gg])&&!$gd)$n='Session expired, please login again.';else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.sprintf('Master password expired. <a href="https://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Gg]&&$_GET[$Gg]&&ini_bool("session.use_only_cookies"))$n='Session support must be enabled.';$F=session_get_cookie_params();cookiem("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('Login',$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Ef)),false);page_footer("auth");exit;}$g=connect();}$Vb=new
Min_Driver($g);if(!is_object($g)||($ce=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($ce)?$ce:'Invalid credentials.')));if($Ja&&$_POST["token"])$_POST["token"]=$Ah;$n='';if($_POST){if(!verify_token()){$vd="max_input_vars";$ne=ini_get($vd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$ne||$X<$ne)){$vd=$y;$ne=$X;}}}$n=(!$_POST["token"]&&$ne?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$vd'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$df=array(),$z=0){global$x;$be=array();$w=array();$f=array();$Sa=array();$Oh=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Hd=0;$Hd<count($K);$Hd++){$o=$I->fetch_field();$C=$o->name;$cf=$o->orgtable;$bf=$o->orgname;$J[$o->table]=$cf;if($df&&$x=="sql")$be[$Hd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($cf!=""){if(!isset($w[$cf])){$w[$cf]=array();foreach(indexes($cf,$h)as$v){if($v["type"]=="PRIMARY"){$w[$cf]=array_flip($v["columns"]);break;}}$f[$cf]=$w[$cf];}if(isset($f[$cf][$bf])){unset($f[$cf][$bf]);$w[$cf][$bf]=$Hd;$be[$Hd]=$cf;}}if($o->charsetnr==63)$Sa[$Hd]=true;$Oh[$Hd]=$o->type;echo"<th".($cf!=""||$o->name!=$bf?" title='".h(($cf!=""?"$cf.":"").$bf)."'":"").">".h($C).($df?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Sa[$y]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Oh[$y]==254)$X="<code>$X</code>";}if(isset($be[$y])&&!$f[$be[$y]]){if($df&&$x=="sql"){$R=$K[array_search("table=",$be)];$_=$be[$y].urlencode($df[$R]!=""?$df[$R]:$R);}else{$_="edit=".urlencode($be[$y]);foreach($w[$be[$y]]as$kb=>$Hd)$_.="&where".urlencode("[".bracket_escape($kb)."]")."=".urlencode($K[$Hd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".'No rows.')."\n";return$J;}function
referencable_primary($_g){$J=array();foreach(table_status('',true)as$dh=>$R){if($dh!=$_g&&fk_support($R)){foreach(fields($dh)as$o){if($o["primary"]){if($J[$dh]){unset($J[$dh]);break;}$J[$dh]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$nb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$nb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$mb,$Rc=array()){global$Vg,$Oh,$Vh,$Qe;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($Oh[$U])&&!isset($Rc[$U]))array_unshift($Vg,$U);if($Rc)$Vg['Foreign keys']=$Rc;echo
optionlist($Vg,$U),'</select>
<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($mb,$o["collation"]).'</select>',($Vh?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Vh,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Rc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Qe),$o["on_delete"])."</select> ":" ");}function
process_length($Yd){global$oc;return(preg_match("~^\\s*\\(?\\s*$oc(?:\\s*,\\s*$oc)*+\\s*\\)?\\s*\$~",$Yd)&&preg_match_all("~$oc~",$Yd,$he)?"(".implode(",",$he[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$Yd)));}function
process_type($o,$lb="COLLATE"){global$Vh;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Vh)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $lb ".q($o["collation"]):"");}function
process_field($o,$Mh){global$x;$Kb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Mh),($o["null"]?" NULL":" NOT NULL"),(isset($Kb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Kb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Kb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Kb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Kb))?$Kb:q($Kb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$mb,$U="TABLE",$Rc=array(),$rb=false){global$g,$wd;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?'Column name':'Parameter name'),'<td id="label-type">Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td id="label-length">Length
<td>','Options';if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">Default value
',(support("comment")?"<td id='label-comment'".($rb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$ef=$o[($_POST?"orig":"field")];$Rb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$ef=="");echo'<tr',($Rb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$wd),$o["inout"]):""),'<th>';if($Rb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($ef),'">
';edit_type("fields[$s]",$o,$mb,$Rc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
',(support("comment")?"<td".($rb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.3.1' alt='^' title='".'Move up'."' onclick='return !editingMoveRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.3.1' alt='v' title='".'Move down'."' onclick='return !editingMoveRow(this, 0);'>&nbsp;":""),($ef==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.1' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){$D=0;if($_POST["up"]){$Sd=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$Sd,0,array($o));break;}if(isset($o["field"]))$Sd=$D;$D++;}}elseif($_POST["down"]){$Tc=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$Tc){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($Tc));break;}if(key($_POST["down"])==$y)$Tc=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Yc,$Mf,$f,$Pe){if(!$Mf)return
true;if($Mf==array("ALL PRIVILEGES","GRANT OPTION"))return($Yc=="GRANT"?queries("$Yc ALL PRIVILEGES$Pe WITH GRANT OPTION"):queries("$Yc ALL PRIVILEGES$Pe")&&queries("$Yc GRANT OPTION$Pe"));return
queries("$Yc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Mf).$f).$Pe);}function
drop_create($Xb,$i,$Yb,$ph,$ac,$A,$se,$qe,$re,$Me,$Ce){if($_POST["drop"])query_redirect($Xb,$A,$se);elseif($Me=="")query_redirect($i,$A,$re);elseif($Me!=$Ce){$Bb=queries($i);queries_redirect($A,$qe,$Bb&&queries($Xb));if($Bb)queries($Yb);}else
queries_redirect($A,$qe,queries($ph)&&queries($ac)&&queries($Xb)&&queries($i));}function
create_trigger($Pe,$K){global$x;$uh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($x=="mssql"?$Pe.$uh:$uh.$Pe).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($og,$K){global$wd;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($wd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $og ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$Qe;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Qe)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Qe)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Ic,$zh){$J=pack("a100a8a8a8a12a12",$Ic,644,0,0,decoct($zh->size),decoct(time()));$eb=8*32;for($s=0;$s<strlen($J);$s++)$eb+=ord($J[$s]);$J.=sprintf("%06o",$eb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$zh->send();echo
str_repeat("\0",511-($zh->size+511)%512);}function
ini_bytes($vd){$X=ini_get($vd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($xf){global$x,$g;$Zh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($xf[$x]?"<a href='$Zh[$x]$xf[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Ah,$n,$Wb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$n,false);echo"<p class='links'>\n";foreach(array('database'=>'Create database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status','replication'=>'Replication',)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Wb[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$vg=support("scheme");$mb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'Database'." - <a href='".h(ME)."refresh=1'>".'Refresh'."</a>"."<td>".'Collation'."<td>".'Tables'."<td>".'Size'." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".'Compute'."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$ng=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$ng' id='$m'>".h($m)."</a>";$d=nbsp(db_collation($m,$mb));echo"<td>".(support("database")?"<a href='$ng".($vg?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$ng&amp;schema=' id='tables-".h($m)."' title='".'Database schema'."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$Ah'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["replication"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirectm(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}$Qe="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($wb){$this->size+=strlen($wb);fwrite($this->handler,$wb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$oc="'(?:''|[^'\\\\]|\\\\.)*'";$wd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Vb->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?'Materialized view':'View':'Table').": ".h($a),$n);$b->selectLinks($S);$qb=$S["Comment"];if($qb!="")echo"<p>".'Comment'.": ".h($qb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$Rc=foreign_keys($a);if($Rc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td>&nbsp;</thead>\n";foreach($Rc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$Lh=triggers($a);if($Lh){echo"<table cellspacing='0'>\n";foreach($Lh
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$fh=array();$gh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$he,PREG_SET_ORDER);foreach($he
as$s=>$B){$fh[$B[1]]=array($B[2],$B[3]);$gh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Bh=0;$Pa=-1;$ug=array();$bg=array();$Wd=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Bf=0;$ug[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Bf+=1.25;$o["pos"]=$Bf;$ug[$R]["fields"][$C]=$o;}$ug[$R]["pos"]=($fh[$R]?$fh[$R]:array($Bh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$Ud=$Pa;if($fh[$R][1]||$fh[$X["table"]][1])$Ud=min(floatval($fh[$R][1]),floatval($fh[$X["table"]][1]))-1;else$Pa-=.1;while($Wd[(string)$Ud])$Ud-=.0001;$ug[$R]["references"][$X["table"]][(string)$Ud]=array($X["source"],$X["target"]);$bg[$X["table"]][$R][(string)$Ud]=$X["target"];$Wd[(string)$Ud]=true;}}$Bh=max($Bh,$ug[$R]["pos"][0]+2.5+$Bf);}echo'<div id="schema" style="height: ',$Bh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$gh)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Bh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($ug
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$mh=>$cg){foreach($cg
as$Ud=>$Yf){$Vd=$Ud-$fh[$C][1];$s=0;foreach($Yf[0]as$Ng)echo"\n<div class='references' title='".h($mh)."' id='refs$Ud-".($s++)."' style='left: $Vd"."em; top: ".$R["fields"][$Ng]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Vd)."em;'></div></div>";}}foreach((array)$bg[$C]as$mh=>$cg){foreach($cg
as$Ud=>$f){$Vd=$Ud-$fh[$C][1];$s=0;foreach($f
as$lh)echo"\n<div class='references' title='".h($mh)."' id='refd$Ud-".($s++)."' style='left: $Vd"."em; top: ".$R["fields"][$lh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.3.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Vd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($ug
as$C=>$R){foreach((array)$R["references"]as$mh=>$cg){foreach($cg
as$Ud=>$Yf){$we=$Bh;$le=-10;foreach($Yf[0]as$y=>$Ng){$Cf=$R["pos"][0]+$R["fields"][$Ng]["pos"];$Df=$ug[$mh]["pos"][0]+$ug[$mh]["fields"][$Yf[1][$y]]["pos"];$we=min($we,$Cf,$Df);$le=max($le,$Cf,$Df);}echo"<div class='references' id='refl$Ud' style='left: $Ud"."em; top: $we"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($le-$we)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$zb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$zb.="&$y=".urlencode($_POST[$y]);cookiem("adminer_export",substr($zb,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$_c=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Dd=preg_match('~sql~',$_POST["format"]);if($Dd){echo"-- Adminer $ia ".$Wb[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$Wg=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Dd&&preg_match('~CREATE~',$Wg)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($Wg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Dd){if($Wg)echo
use_sql($m).";\n\n";$kf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$og){foreach(get_rows("SHOW $og STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $og ".idf_escape($K["Name"]),2));set_utf8mb4($i);$kf.=($Wg!='DROP+CREATE'?"DROP $og IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$kf.=($Wg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($kf)echo"DELIMITER ;;\n\n$kf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$li=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Eb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Eb){if($_c=="tar"){$zh=new
TmpFile;ob_start(array($zh,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$li[]=$C;elseif($Eb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Dd&&$_POST["triggers"]&&$R&&($Lh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Lh\nDELIMITER ;\n";if($_c=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$zh);}elseif($Dd)echo"\n";}}foreach($li
as$ki)$b->dumpTable($ki,$_POST["table_style"],1);if($_c=="tar")echo
pack("x512");}}}if($Dd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Hb=array('','USE','DROP+CREATE','CREATE');$hh=array('','DROP+CREATE','CREATE');$Fb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Fb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Hb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Routines'):"").(support("event")?checkbox("events",1,$K["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$hh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Fb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$Ah,'">

<table cellspacing="0">
';$Gf=array();if(DB!=""){$cb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$cb onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$cb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$li="";$ih=tables_list();foreach($ih
as$C=>$U){$Ff=preg_replace('~_.*~','',$C);$cb=($a==""||$a==(substr($a,-1)=="%"?"$Ff%":$C));$Jf="<tr><td>".checkbox("tables[]",$C,$cb,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$li.="$Jf\n";else
echo"$Jf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$cb,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Gf[$Ff]++;}echo$li;if($ih)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Ff=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Ff%",$m,"formUncheck('check-databases');","block")."\n";$Gf[$Ff]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Kc=true;foreach($Gf
as$y=>$X){if($y!=""&&$X>1){echo($Kc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Kc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');echo'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Yc=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Yc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Edit'."</a>\n";if(!$Yc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$id=&get_session("queries");$hd=&$id[DB];if(!$n&&$_POST["clear"]){$hd=array();redirectm(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$n);if(!$n&&$_POST){$Vc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Vc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Vc?fread($Vc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Qf=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$hd||reset(end($hd))!=$Qf){restart_session();$hd[]=array($Qf,time());set_session("queries",$id);stop_session();}}$Og="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Mb=";";$D=0;$lc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$pb=0;$qc=array();$pf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Ch=microtime(true);parse_str($_COOKIE["adminer_export"],$wa);$cc=$b->dumpFormat();unset($cc["sql"]);while($H!=""){if(!$D&&preg_match("~^$Og*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Mb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Mb)."\\s*|$pf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Tc,$Bf)=$B[0];if(!$Tc&&$Vc&&!feof($Vc))$H.=fread($Vc,1e5);else{if(!$Tc&&rtrim($H)=="")break;$D=$Bf+strlen($Tc);if($Tc&&rtrim($Tc)!=$Mb){while(preg_match('('.($Tc=='/*'?'\\*/':($Tc=='['?']':(preg_match('~^-- |^#~',$Tc)?"\n":preg_quote($Tc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$sg=$B[0][0];if(!$sg&&$Vc&&!feof($Vc))$H.=fread($Vc,1e5);else{$D=$B[0][1]+strlen($sg);if($sg[0]!="\\")break;}}}else{$lc=false;$Qf=substr($H,0,$Bf);$pb++;$Jf="<pre id='sql-$pb'><code class='jush-$x'>".$b->sqlCommandQuery($Qf)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$Og*+ATTACH\\b~i",$Qf,$B)){echo$Jf,"<p class='error'>".'ATTACH queries are not supported.'."\n";$qc[]=" <a href='#sql-$pb'>$pb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Jf;ob_flush();flush();}$Sg=microtime(true);if($g->multi_query($Qf)&&is_object($h)&&preg_match("~^$Og*+USE\\b~i",$Qf))$h->query($Qf);do{$I=$g->store_result();$sh=" <span class='time'>(".format_time($Sg).")</span>".(strlen($Qf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Qf))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$Jf:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$qc[]=" <a href='#sql-$pb'>$pb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$df=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Ge=$I->num_rows;echo"<p>".($Ge?($z&&$Ge>$z?sprintf('%d / ',$z):"").lang(array('%d row','%d rows'),$Ge):""),$sh;$t="export-$pb";$zc=", <a href='#$t' onclick=\"return !toggle('$t');\">".'Export'."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$wa["output"])." ".html_select("format",$cc,$wa["format"])."<input type='hidden' name='query' value='".h($Qf)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$Ah'></span>\n";if($h&&preg_match("~^($Og|\\()*+SELECT\\b~i",$Qf)&&($yc=explain($h,$Qf))){$t="explain-$pb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$zc","<div id='$t' class='hidden'>\n";select($yc,$h,$df);echo"</div>\n";}else
echo$zc;echo"</form>\n";}}else{if(preg_match("~^$Og*+(CREATE|DROP|ALTER)$Og++(DATABASE|SCHEMA)\\b~i",$Qf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$sh\n";}$Sg=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($lc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$pb-count($qc))," <span class='time'>(".format_time($Ch).")</span>\n";}elseif($qc&&$pb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$qc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$vc="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Qf=$_GET["sql"];if($_POST)$Qf=$_POST["query"];elseif($_GET["history"]=="all")$Qf=$hd;elseif($_GET["history"]!="")$Qf=$hd[$_GET["history"]][0];echo"<p>";textarea("query",$Qf,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>$vc\n",'Limit rows'.": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$vc":'File uploads are disabled.'),"</div></fieldset>\n","<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Stop on error')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),'Show only errors')."\n","<input type='hidden' name='token' value='$Ah'>\n";if(!isset($_GET["import"])&&$hd){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($hd);$X;$X=prev($hd)){$y=key($hd);list($Qf,$sh,$gc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.'Edit'."</a>"." <span class='time' title='".@date('Y-m-d',$sh)."'>".@date("H:i:s",$sh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Qf)))),80,"</code>").($gc?" <span class='time'>($gc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Wh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$Wh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Wh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$Rh=unique_array($_GET["where"],$w);$Tf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,'Item has been deleted.',$Vb->delete($a,$Tf,!$Rh));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Wh){if(!$O)redirectm($A);queries_redirect($A,'Item has been updated.',$Vb->update($a,$O,$Tf,!$Rh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$Vb->insert($a,$O);$Td=($I?last_id():0);queries_redirect($A,sprintf('Item%s has been inserted.',($Td?" $Td":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Fa=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Fa="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Fa="1*".idf_escape($C);$M[]=($Fa?"$Fa AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Vb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$Vb->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Vb->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$Vb->primary),"auto_increment"=>($y==$Vb->primary));}}}edit_form($a,$p,$K,$Wh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$rf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$rf[$y]=$y;$ag=referencable_primary($a);$Rc=array();foreach($ag
as$dh=>$o)$Rc[str_replace("`","``",$dh)."`".str_replace("`","``",$o["field"])]=$dh;$gf=array();$S=array();if($a!=""){$gf=fields($a);$S=table_status($a);if(!$S)$n='No tables.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$p=array();$Ca=array();$ai=false;$Pc=array();$ff=reset($gf);$_a=" FIRST";foreach($K["fields"]as$y=>$o){$q=$Rc[$o["type"]];$Mh=($q!==null?$ag[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$K["auto_increment_col"])$o["auto_increment"]=true;$Of=process_field($o,$Mh);$Ca[]=array($o["orig"],$Of,$_a);if($Of!=process_field($ff,$ff)){$p[]=array($o["orig"],$Of,$_a);if($o["orig"]!=""||$_a)$ai=true;}if($q!==null)$Pc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Rc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Mh["field"]),'on_delete'=>$o["on_delete"],));$_a=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$ai=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$ff=next($gf);if(!$ff)$_a="";}}$tf="";if($rf[$K["partition_by"]]){$uf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$y=>$X){$Y=$K["partition_values"][$y];$uf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$tf.="\nPARTITION BY $K[partition_by]($K[partition])".($uf?" (".implode(",",$uf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$tf.="\nREMOVE PARTITIONING";$pe='Table has been altered.';if($a==""){cookiem("adminer_engine",$K["Engine"]);$pe='Table has been created.';}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$pe,alter_table($a,$C,($x=="sqlite"&&($ai||$Pc)?$Ca:$p),$Pc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$tf));}}page_header(($a!=""?'Alter table':'Create table'),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Oh["int"])?"int":(isset($Oh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($gf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$Wc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Wc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$uf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Wc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$uf[""]="";$K["partition_names"]=array_keys($uf);$K["partition_values"]=array_values($uf);}}}$mb=collations();$nc=engines();foreach($nc
as$mc){if(!strcasecmp($mc,$K["Engine"])){$K["Engine"]=$mc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($nc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".'engine'.")")+$nc,$K["Engine"])."</select>":""),' ',($mb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".'collation'.")")+$mb,$K["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$rb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$rb){foreach($K["fields"]as$o){if($o["comment"]!=""){$rb=true;break;}}}edit_fields($K["fields"],$mb,"TABLE",$Rc,$rb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($rb?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($rb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$sf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'Partition by',$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$rf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($sf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($sf?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($K["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$rd=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$rd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$rd[]="SPATIAL";$w=indexes($a);$Hf=array();if($x=="mongo"){$Hf=$w["_id_"];unset($rd[0]);unset($w["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$rd)){$f=array();$Zd=array();$Ob=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$e){if($e!=""){$Yd=$v["lengths"][$y];$Nb=$v["descs"][$y];$O[]=idf_escape($e).($Yd?"(".(+$Yd).")":"").($Nb?" DESC":"");$f[]=$e;$Zd[]=($Yd?$Yd:null);$Ob[]=$Nb;}}if($f){$wc=$w[$C];if($wc){ksort($wc["columns"]);ksort($wc["lengths"]);ksort($wc["descs"]);if($v["type"]==$wc["type"]&&array_values($wc["columns"])===$f&&(!$wc["lengths"]||array_values($wc["lengths"])===$Zd)&&array_values($wc["descs"])===$Ob){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$wc)$c[]=array($wc["type"],$C,"DROP");if(!$c)redirectm(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$K["indexes"][$y]["columns"][]="";}$v=end($K["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$K["indexes"]=$w;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">Index Type
<th><input type="submit" class="wayoff">Column (length)
<th id="label-name">Name
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.3.1' alt='+' title='Add next'></noscript>&nbsp;
</thead>
<?php
if($Hf){echo"<tr><td>PRIMARY<td>";foreach($Hf["columns"]as$y=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$Hd=1;foreach($K["indexes"]as$v){if(!$_POST["drop_col"]||$Hd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Hd][type]",array(-1=>"")+$rd,$v["type"],($Hd==count($K["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$e){echo"<span>".select_input(" name='indexes[$Hd][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".'Column'."'",($p?array_combine($p,$p):$p),$e),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Hd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".'Length'."'>":""),($x!="sql"?checkbox("indexes[$Hd][descs][$s]",1,$v["descs"][$y],'descending'):"")," </span>";$s++;}echo"<td><input name='indexes[$Hd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Hd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.1' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Hd++;}echo'</table>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'Database has been renamed.',rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$Xg=true;$Sd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$Xg=false;$Sd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Sd),'Database has been created.',$Xg);}}else{if(!$K["collation"])redirectm(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$n,array(),h(DB));$mb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$mb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$Yc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Yc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($mb?html_select("collation",array(""=>"(".'collation'.")")+$mb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,'Schema has been dropped.');else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,'Schema has been created.');elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,'Schema has been altered.');else
redirectm($_);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$n);$og=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$pd=array();$kf=array();foreach($og["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$kf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$pd[]=$s;}if(!$n&&$_POST){$Xa=array();foreach($og["fields"]as$y=>$o){if(in_array($y,$pd)){$X=process_input($o);if($X===false)$X="''";if(isset($kf[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Xa[]=(isset($kf[$y])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Xa).")";echo"<p><code class='jush-$x'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($kf)select($g->query("SELECT ".implode(", ",$kf)));}}echo'
<form action="" method="post">
';if($pd){echo"<table cellspacing='0'>\n";foreach($pd
as$y){$o=$og["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}inputm($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$pe=($_POST["drop"]?'Foreign key has been dropped.':($C!=""?'Foreign key has been altered.':'Foreign key has been created.'));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$lh=array();foreach($K["source"]as$y=>$X)$lh[$y]=$K["target"][$y];$K["target"]=$lh;}if($x=="sqlite")queries_redirect($A,$pe,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Xb="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Xb,$A,$pe);else{query_redirect($c.($C!=""?"$Xb,":"")."\nADD".format_foreign_key($K),$A,$pe);$n='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$n";}}}page_header('Foreign key',$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Rc=foreign_keys($a);$K=$Rc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Ng=array_keys(fields($a));$lh=($a===$K["table"]?$Ng:array_keys(fields($K["table"])));$Zf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'Target table:
',html_select("table",$Zf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">Source<th id="label-target">Target</thead>
';$Hd=0;foreach($K["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Ng,$X,($Hd==count($K["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$lh,$K["target"][$y],1,"label-target");$Hd++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Qe),$K["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Qe),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$hf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$hf=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($K["name"]);$Fa=" AS\n$K[select]";$A=ME."table=".urlencode($C);$pe='View has been altered.';$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$hf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Fa,$A,$pe);else{$nh=$C."_adminer_".uniqid();drop_create("DROP $hf ".table($a),"CREATE $U ".table($C).$Fa,"DROP $U ".table($C),"CREATE $U ".table($nh).$Fa,"DROP $U ".table($nh),($_POST["drop"]?substr(ME,0,-1):$A),'View has been dropped.',$pe,'View has been created.',$a,$C);}}if(!$_POST&&$a!=""){$K=viewm($a);$K["name"]=$a;$K["materialized"]=($hf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?'Alter view':'Create view'),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],'Materialized view'):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$zd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Tg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($K["INTERVAL_FIELD"],$zd)&&isset($Tg[$K["STATUS"]])){$tg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$tg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$tg)."\n".$Tg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$zd,$K["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Tg,$K["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$og=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$nh="$K[name]_adminer_".uniqid();drop_create("DROP $og ".idf_escape($da),create_routine($og,$K),"DROP $og ".idf_escape($K["name"]),create_routine($og,array("name"=>$nh)+$K),"DROP $og ".idf_escape($nh),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$n);if(!$_POST&&$da!=""){$K=routine($da,$og);$K["name"]=$da;}$mb=get_vals("SHOW CHARACTER SET");sort($mb);$pg=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($pg?'Language'.": ".html_select("language",$pg,$K["language"]):""),'<input type="submit" value="Save">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$mb,$og);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$K["returns"],$mb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,'Sequence has been created.');elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,'Sequence has been altered.');else
redirectm($_);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$Kh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Kh["Timing"])&&in_array($_POST["Event"],$Kh["Event"])&&in_array($_POST["Type"],$Kh["Type"])){$Pe=" ON ".table($a);$Xb="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$Pe:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Xb,$A,'Trigger has been dropped.');else{if($C!="")queries($Xb);queries_redirect($A,($C!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($Pe,$_POST)));if($C!="")queries(create_trigger($Pe,$K+array("Type"=>reset($Kh["Type"]))));}}$K=$_POST;}page_header(($C!=""?'Alter trigger'.": ".h($C):'Create trigger'),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$Kh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>Event<td>',html_select("Event",$Kh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Kh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>Type<td>',html_select("Type",$Kh["Type"],$K["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Mf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$xb)$Mf[$xb][$K["Privilege"]]=$K["Comment"];}$Mf["Server Admin"]+=$Mf["File access on server"];$Mf["Databases"]["Create routine"]=$Mf["Procedures"]["Create routine"];unset($Mf["Procedures"]["Create routine"]);$Mf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Mf["Columns"][$X]=$Mf["Tables"][$X];unset($Mf["Server Admin"]["Usage"]);foreach($Mf["Tables"]as$y=>$X)unset($Mf["Databases"][$y]);$Be=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Be[$X]=(array)$Be[$X]+(array)$_POST["grants"][$y];}$Zc=array();$Ne="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$he,PREG_SET_ORDER)){foreach($he
as$X){if($X[1]!="USAGE")$Zc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Zc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Ne=$B[1];}}if($_POST&&!$n){$Oe=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Oe",ME."privileges=",'User has been dropped.');else{$De=q($_POST["user"])."@".q($_POST["host"]);$vf=$_POST["pass"];if($vf!=''&&!$_POST["hashed"]){$vf=$g->result("SELECT PASSWORD(".q($vf).")");$n=!$vf;}$Bb=false;if(!$n){if($Oe!=$De){$Bb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $De IDENTIFIED BY PASSWORD ".q($vf));$n=!$Bb;}elseif($vf!=$Ne)queries("SET PASSWORD FOR $De = ".q($vf));}if(!$n){$lg=array();foreach($Be
as$Ie=>$Yc){if(isset($_GET["grant"]))$Yc=array_filter($Yc);$Yc=array_keys($Yc);if(isset($_GET["grant"]))$lg=array_diff(array_keys(array_filter($Be[$Ie],'strlen')),$Yc);elseif($Oe==$De){$Le=array_keys((array)$Zc[$Ie]);$lg=array_diff($Le,$Yc);$Yc=array_diff($Yc,$Le);unset($Zc[$Ie]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ie,$B)&&(!grant("REVOKE",$lg,$B[2]," ON $B[1] FROM $De")||!grant("GRANT",$Yc,$B[2]," ON $B[1] TO $De"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Oe!=$De)queries("DROP USER $Oe");elseif(!isset($_GET["grant"])){foreach($Zc
as$Ie=>$lg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ie,$B))grant("REVOKE",array_keys($lg),$B[2]," ON $B[1] FROM $De");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$n);if($Bb)$g->query("DROP USER $De");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$n,array("privileges"=>array('','Privileges')));if($_POST){$K=$_POST;$Zc=$Be;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ne;if($Ne!="")$K["hashed"]=true;$Zc[(DB==""||$Zc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($Zc
as$Ie=>$Yc){echo'<th>'.($Ie!="*.*"?"<input name='objects[$s]' value='".h($Ie)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$xb=>$Nb){foreach((array)$Mf[$xb]as$Lf=>$qb){echo"<tr".odd()."><td".($Nb?">$Nb<td":" colspan='2'").' lang="en" title="'.h($qb).'">'.h($Lf);$s=0;foreach($Zc
as$Ie=>$Yc){$C="'grants[$s][".h(strtoupper($Lf))."]'";$Y=$Yc[strtoupper($Lf)];if($xb=="Server Admin"&&$Ie!=(isset($Zc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Lf=="All privileges"?" id='grants-$s-all'":($Lf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Od=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Od++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Od),$Od||!$_POST["kill"]);}page_header('Process list',$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$x=="sql"?"Id":"pid"],0):"");foreach($K
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".sprintf('%d in total',max_connections()),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$Ah,'">
</form>
';}elseif(isset($_GET["replication"])){page_header('Replication');echo"<h3>".'Master status'.doc_link(array("sql"=>"show-master-status.html"))."</h3>\n";$fe=replication_status("MASTER");if(!$fe)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($fe[0]as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}$Kg=replication_status("SLAVE");if($Kg){echo"<h3>".'Slave status'.doc_link(array("sql"=>"show-slave-status.html"))."</h3>\n";foreach($Kg[0]as$Jg){echo"<table cellspacing='0'>\n";foreach($Jg
as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}}}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Rc=column_foreign_keys($a);$Ke="";if($S["Oid"]){$Ke=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ke));}parse_str($_COOKIE["adminer_import"],$xa);$mg=array();$f=array();$rh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$f[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$rh=$b->selectLengthProcess();}$mg+=$o["privileges"];}list($M,$ad)=$b->selectColumnsProcess($f,$w);$Cd=count($ad)<count($M);$Z=$b->selectSearchProcess($p,$w);$af=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$Wc=($M?implode(", ",$M):"*".($Ke?", $Ke":"")).convert_fields($f,$p,$M)."\nFROM ".table($a);$bd=($ad&&$Cd?"\nGROUP BY ".implode(", ",$ad):"").($af?"\nORDER BY ".implode(", ",$af):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Sh=>$K){$Fa=convert_field($p[key($K)]);$M=array($Fa?$Fa:idf_escape(key($K)));$Z[]=where_check($Sh,$p);$J=$Vb->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$pi=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$db=array();foreach($_POST["check"]as$ab)$db[]=where_check($ab,$p);$pi[]="((".implode(") OR (",$db)."))";}$pi=($pi?"\nWHERE ".implode(" AND ",$pi):"");$Hf=$Uh=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Hf=array_flip($v["columns"]);$Uh=($M?$Hf:array());break;}}foreach((array)$Uh
as$y=>$X){if(in_array(idf_escape($y),$M))unset($Uh[$y]);}if($_POST["export"]){cookiem("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Uh===array())$H="SELECT $Wc$pi$bd";else{$Qh=array();foreach($_POST["check"]as$X)$Qh[]="(SELECT".limit($Wc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$bd,1).")";$H=implode(" UNION ALL ",$Qh);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Rc)){if($_POST["save"]||$_POST["delete"]){$I=true;$ya=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Uh===array()&&is_array($_POST["check"]))||$Cd){$I=($_POST["delete"]?$Vb->delete($a,$pi):($_POST["clone"]?queries("INSERT $H$pi"):$Vb->update($a,$O,$pi)));$ya=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$oi="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$Vb->delete($a,$oi,1):($_POST["clone"]?queries("INSERT".limit1($H,$oi)):$Vb->update($a,$O,$oi)));if(!$I)break;$ya+=$g->affected_rows;}}}$pe=lang(array('%d item has been affected.','%d items have been affected.'),$ya);if($_POST["clone"]&&$I&&$ya==1){$Td=last_id();if($Td)$pe=sprintf('Item%s has been inserted.'," $Td");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$pe,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n='Ctrl+click on a value to modify it.';else{$I=true;$ya=0;foreach($_POST["val"]as$Sh=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$Vb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Sh,$p),!($Cd||$Uh===array())," ");if(!$I)break;$ya+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ya),$I);}}elseif(!is_string($Hc=get_file("csv_file",true)))$n=upload_error($Hc);elseif(!preg_match('~~u',$Hc))$n='File must be in UTF-8 encoding.';else{cookiem("adminer_import","output=".urlencode($xa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$nb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Hc,$he);$ya=count($he[0]);$Vb->begin();$Ag=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($he[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Ag]*)$Ag~",$X.$Ag,$ie);if(!$y&&!array_diff($ie[1],$nb)){$nb=$ie[1];$ya--;}else{$O=array();foreach($ie[1]as$s=>$kb)$O[idf_escape($nb[$s])]=($kb==""&&$p[$nb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$kb))));$L[]=$O;}}$I=(!$L||$Vb->insertUpdate($a,$L,$Hf));if($I)$I=$Vb->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ya),$I);$Vb->rollback();}}}$dh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $dh",$n);$O=null;if(isset($mg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Rc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$w);$b->selectOrderPrint($af,$f,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($rh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Uc=$g->result(count_rows($a,$Z,$Cd,$ad));$E=floor(max(0,$Uc-1)/$z);}$yg=$M;if(!$yg){$yg[]="*";if($Ke)$yg[]=$Ke;}$yb=convert_fields($f,$p,$M);if($yb)$yg[]=substr($yb,2);$I=$Vb->select($a,$yg,$Z,$ad,$af,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$kc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$ad&&$Cd&&$x=="sql")$Uc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Oa=$b->backwardKeys($a,$dh);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$ad&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Ae=array();$Xc=array();reset($M);$Vf=1;foreach($L[0]as$y=>$X){if($y!=$Ke){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$C=($o?$b->fieldName($o,$Vf):($X["fun"]?"*":$y));if($C!=""){$Vf++;$Ae[$y]=$C;$e=idf_escape($y);$ld=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Nb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ld.($af[0]==$e||$af[0]==$y||(!$af&&$Cd&&$ad[0]==$e)?$Nb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($ld.$Nb)."' title='".'descending'."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Xc[$y]=$X["fun"];next($M);}}$Zd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$Zd[$y]=max($Zd[$y],min(40,strlen(utf8_decode($X))));}}echo($Oa?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Rc)as$_e=>$K){$Rh=unique_array($L[$_e],$w);if(!$Rh){$Rh=array();foreach($L[$_e]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Rh[$y]=$X;}}$Sh="";foreach($Rh
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$Sh.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$ad&&$M?"":"<td>".checkbox("check[]",substr($Sh,1),in_array(substr($Sh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Cd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Sh)."'>".'edit'."</a>"));foreach($K
as$y=>$X){if(isset($Ae[$y])){$o=$p[$y];if($X!=""&&(!isset($kc[$y])||$kc[$y]!=""))$kc[$y]=(is_mail($X)?$Ae[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$Sh;if(!$_&&$X!==null){foreach((array)$Rc[$y]as$q){if(count($Rc[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$Ng)$_.=where_link($s,$q["target"][$s],$L[$_e][$Ng]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Rh))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Rh
as$Id=>$W)$_.=where_link($s++,$Id,$W);}$X=select_value($X,$_,$o,$rh);$t=h("val[$Sh][".bracket_escape($y)."]");$Y=$_POST["val"][$Sh][bracket_escape($y)];$fc=!is_array($K[$y])&&is_utf8($X)&&$L[$_e][$y]==$K[$y]&&!$Xc[$y];$qh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$fc)||$Y!==null){$dd=h($Y!==null?$Y:$K[$y]);echo"<td>".($qh?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$dd</textarea>":"<input name='$t' value='$dd' size='$Zd[$y]'>");}else{$de=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($de?2:($qh?1:0)).($fc?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Oa)echo"<td>";$b->backwardKeysPrint($Oa,$L[$_e]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$uc=true;if($_GET["page"]!="last"){if(!+$z)$Uc=count($L);elseif($x!="sql"||!$Cd){$Uc=($Cd?false:found_rows($S,$Z));if($Uc<max(1e4,2*($E+1)*$z))$Uc=reset(slow_query(count_rows($a,$Z,$Cd,$ad)));else$uc=false;}}if(+$z&&($Uc===false||$Uc>$z||$E)){echo"<p class='pages'>";$ke=($Uc===false?$E+(count($L)>=$z?2:1):floor(($Uc-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($ke,$E+5);$s++)echo
pagination($s,$E);if($ke>0){echo($E+5<$ke?" ...":""),($uc&&$Uc!==false?pagination($ke,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ke'>".'last'."</a>");}echo(($Uc===false?count($L)+1:$Uc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.'Loading'.'...\');" class="loadmore">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ke>$E?pagination($E+1,$E).($ke>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Uc!==false?"(".($uc?"":"~ ").lang(array('%d row','%d rows'),$Uc).") ":"");$Sb=($uc?"":"~ ").$Uc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Sb' : checked); selectCount('selected2', this.checked || !checked ? '$Sb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Sc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Sc['sql']);break;}}if($Sc){print_fieldset("export",'Export'." <span id='selected2'></span>");$lf=$b->dumpOutput();echo($lf?html_select("output",$lf,$xa["output"])." ":""),html_select("format",$Sc,$xa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$ad&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$xa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($kc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$Ah'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?'Status':'Variables');$hi=($P?show_status():show_variables());if(!$hi)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($hi
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$ah=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($ah+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($Qg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($ah[$y]))$ah[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($ah
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$jh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($jh&&!$n&&!$_POST["search"]){$I=true;$pe="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$pe='Tables have been truncated.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$pe='Tables have been moved.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$pe='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$pe='Tables have been dropped.';}elseif($x!="sql"){$I=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$pe='Tables have been optimized.';}elseif(!$_POST["tables"])$pe='No tables.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$pe.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$pe,$I);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$ih=tables_list();if(!$ih)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$Tb=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);" class="jsonly">','<th>'.'Table','<td>'.'Engine'.doc_link(array('sql'=>'storage-engines.html')),'<td>'.'Collation'.doc_link(array('sql'=>'charset-mysql.html')),'<td>'.'Data Length'.$Tb,'<td>'.'Index Length'.$Tb,'<td>'.'Data Free'.$Tb,'<td>'.'Auto Increment'.doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.'Rows'.$Tb,(support("comment")?'<td>'.'Comment'.$Tb:''),"</thead>\n";$T=0;foreach($ih
as$C=>$U){$ki=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($ki?"views[]":"tables[]"),$C,in_array($C,$jh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".'Show structure'."' id='$t'>".h($C).'</a>':h($C));if($ki){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'Alter view'.'">'.(preg_match('~materialized~i',$U)?'Materialized view':'View').'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($ih)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$ei="<input type='submit' value='".'Vacuum'."'".on_help("'VACUUM'")."> ";$We="<input type='submit' name='optimize' value='".'Optimize'."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($x=="sqlite"?$ei:($x=="pgsql"?$ei.$We:($x=="sql"?"<input type='submit' value='".'Analyze'."'".on_help("'ANALYZE TABLE'")."> ".$We."<input type='submit' name='check' value='".'Check'."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".'Repair'."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".'Truncate'."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".'Drop'."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$Ah'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$qg=routines();if($qg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($qg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$Cg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Cg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Cg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$ci=types();if($ci){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($ci
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'At given time'."<td>".$K["Execute at"]:'Every'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$sc=$g->result("SELECT @@event_scheduler");if($sc&&$sc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($sc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($ih)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();