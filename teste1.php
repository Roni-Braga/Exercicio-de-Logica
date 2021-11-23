<html>
    <head></head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">



.f1{
    float:left;
    padding:10px;
    margin-left: 300px;

}
.f2{
    float:left;
    padding:10px;
}
.f3{
    padding:10px;
}
.f4{
    float:left;
    padding:10px;
    margin-left: 300px;
}
.f5{
    float:left;
    padding:10px;
}
.f6{
    padding:10px;
   
}

p{
    text-align:center;
}
h3{
    text-align:center;
}
button{
    margin-top:30px;
    margin-left:-140px;
}
body{
          background:  #EEE9E9;
        }
   a{
       text-decoration:none;
   }
        a:hover{
            color:white;
            text-decoration:none;
        }

    </style>
    <body>

        <h3>Depois que você já escolheu o Número verifique se ele está nas TABELAS abaixo:</h3>
        <p>Selecione "SIM" caso o número esteja na tabela e "NÃO" caso o número não esteja na tabela:</p>
      <form action="processa.php" method="POST">
       <div class="f1">
      <table>
           <tr><td> <th>TABELA 1</th></td></tr>
</table>
<table border="1">
           <tr >
                <td >1</td><td>3</td><td>5</td><td>7</td>
            </tr>
        <tr>
            <td>9</td><td>11</td><td>13</td><td>15</td>
        </tr>
        <tr>
            <td>17</td><td>19</td><td>21</td><td>23</td>
        </tr>
        <tr>
            <td>25</td><td>27</td><td>29</td><td>31</td>
        </tr>
        <tr>
            <td>33</td><td>35</td><td>37</td><td>39</td>
        </tr>
        <tr>
             <td>41</td><td>43</td><td>45</td><td>47</td>
            </tr>
        <tr>
            <td>49</td><td>51</td><td>53</td><td>55</td>
        </tr>
        <tr>
            <td>57</td><td>59</td><td>61</td><td>63</td>
        </tr>

</table>
<table>
   <tr><td><select name="opcao1" required>
    <option>Selecione</option>
    <option value="SIM" >SIM</option>
    <option value="NAO">NAO</option>
</select></td></tr>
</table>

</div>
<div class="f2">
 <table>
           <tr><td> <th>TABELA 2</th></td></tr>
</table>
<table border=1>
            <tr>
                <td>2</td><td>3</td><td>6</td><td>7</td>
            </tr>
        <tr>
            <td>10</td><td>11</td><td>14</td><td>15</td>
        </tr>
        <tr>
            <td>18</td><td>19</td><td>22</td><td>23</td>
        </tr>
        <tr>
            <td>26</td><td>27</td><td>30</td><td>31</td>
        </tr>
        <tr>
            <td>34</td><td>35</td><td>38</td><td>39</td>
        </tr>
        <tr>
             <td>42</td><td>43</td><td>46</td><td>47</td>
            </tr>
        <tr>
            <td>50</td><td>51</td><td>54</td><td>55</td>
        </tr>
        <tr>
            <td>58</td><td>59</td><td>62</td><td>63</td>
        </tr>
       
    
</table>
<table>
     <tr><td>   <select name="opcao2" required>
    <option>Selecione</option>
    <option value="SIM">SIM</option>
    <option value="NAO">NAO</option>
</select></td></tr>
</table>
</div>
<div class="f3">
<table>
           <tr><td> <th>TABELA 3</th></td></tr>
</table>
<table border=1>
            <tr>
                <td>4</td><td>5</td><td>6</td><td>7</td>
            </tr>
        <tr>
            <td>12</td><td>13</td><td>14</td><td>15</td>
        </tr>
        <tr>
            <td>20</td><td>21</td><td>22</td><td>23</td>
        </tr>
        <tr>
            <td>28</td><td>29</td><td>30</td><td>31</td>
        </tr>
        <tr>
            <td>36</td><td>37</td><td>38</td><td>39</td>
        </tr>
        <tr>
             <td>44</td><td>45</td><td>46</td><td>47</td>
            </tr>
        <tr>
            <td>52</td><td>53</td><td>54</td><td>55</td>
        </tr>
        <tr>
            <td>60</td><td>61</td><td>62</td><td>63</td>
        </tr>

</table>
<table><tr><td>
        <select name="opcao3" required>
    <option>Selecione</option>
    <option value="SIM">SIM</option>
    <option value="NAO">NAO</option>
</select></td></tr>
</table>
</div>
<div class="f4">
<table>
           <tr><td> <th>TABELA 4</th></td></tr>
</table>
<table border=1>
            <tr>
                <td>8</td><td>9</td><td>10</td><td>11</td>
            </tr>
        <tr>
            <td>12</td><td>13</td><td>14</td><td>15</td>
        </tr>
        <tr>
            <td>24</td><td>25</td><td>26</td><td>27</td>
        </tr>
        <tr>
            <td>28</td><td>29</td><td>30</td><td>31</td>
        </tr>
        <tr>
            <td>40</td><td>41</td><td>42</td><td>43</td>
        </tr>
        <tr>
             <td>44</td><td>45</td><td>46</td><td>47</td>
            </tr>
        <tr>
            <td>56</td><td>57</td><td>58</td><td>59</td>
        </tr>
        <tr>
            <td>60</td><td>61</td><td>62</td><td>63</td>
        </tr>

</table>
<table><tr><td>    <select name="opcao4" required>
    <option>Selecione</option>
    <option value="SIM">SIM</option>
    <option value="NAO">NAO</option>
</select></td></tr>
</table>
</div>
<div class="f5">
<table>
           <tr><td> <th>TABELA 5</th></td></tr>
</table>
<table border=1>
<tr>
                <td>16</td><td>17</td><td>18</td><td>19</td>
            </tr>
        <tr>
            <td>20</td><td>21</td><td>22</td><td>23</td>
        </tr>
        <tr>
            <td>24</td><td>25</td><td>26</td><td>27</td>
        </tr>
        <tr>
            <td>28</td><td>29</td><td>30</td><td>31</td>
        </tr>
        <tr>
            <td>48</td><td>49</td><td>50</td><td>51</td>
        </tr>
        <tr>
             <td>52</td><td>53</td><td>54</td><td>55</td>
            </tr>
        <tr>
            <td>56</td><td>57</td><td>58</td><td>59</td>
        </tr>
        <tr>
            <td>60</td><td>61</td><td>62</td><td>63</td>
        </tr>      
</table>

<table>
    <tr><td><select name="opcao5" required>
    <option>Selecione</option>
    <option value="SIM">SIM</option>
    <option value="NAO">NAO</option>
</select></td></tr>

</table>
</div>
<div class="f6">
<table>
           <tr><td> <th>TABELA 6</th></td></tr>
</table>
<table border=1>
           
       <tr>
                <td>32</td><td>33</td><td>34</td><td>35</td>
            </tr>
        <tr>
            <td>36</td><td>37</td><td>38</td><td>39</td>
        </tr>
        <tr>
            <td>40</td><td>41</td><td>42</td><td>43</td>
        </tr>
        <tr>
            <td>44</td><td>45</td><td>46</td><td>47</td>
        </tr>
        <tr>
            <td>48</td><td>49</td><td>50</td><td>51</td>
        </tr>
        <tr>
             <td>52</td><td>53</td><td>54</td><td>55</td>
            </tr>
        <tr>
            <td>56</td><td>57</td><td>58</td><td>59</td>
        </tr>
        <tr>
            <td>60</td><td>61</td><td>62</td><td>63</td>
        </tr>

</table>
<table><tr><td>

<select name="opcao6" required>
    <option>Selecione</option>
    <option value="SIM">SIM</option>
    <option value="NAO">NAO</option>
</select></td></tr>
<tr><td><button class="btn btn-outline-primary"><a href="teste.php">Voltar</a></button></td><td>
<button class="btn btn-outline-primary">Resultado</button></td></tr>
</table>

</div>




</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>





</body>
</html