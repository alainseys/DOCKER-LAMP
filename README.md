<h3>Docker LAMP<h3>
<p>Build the container:</p>
<pre>
sudo docker-compose up
</pre>

<h4>Interfaces</h4>
<ul>
    <li><a href="http://127.0.0.1:80">Apache</li>
    <li><a href="http://127.0.0.1:8080">phpmyadmin</li>
</ul>

<h4>SSH into containers</h4>
<p>Enter one of the following commands to ssh into the container</p>
<pre>
docker exec -it 7.3.x-webserver  /bin/bash
docker exec -it 5.7-mysql  /bin/bash
docker exec -it sc-redis  /bin/bash
</pre>
