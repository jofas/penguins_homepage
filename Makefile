start-service:
	sudo systemctl start apache2
	sudo systemctl start mysql

update-localhost:
	cp -r ./[!.]* /srv/www/htdocs/penguins_homepage

update-deployment:
	echo 'put -r ./[!.]*' | sshpass -p $(PENGUINS_SFTP_PASSWORD) \
		sftp $(PENGUINS_SFTP_USER)@$(PENGUINS_SFTP_SERVER)
