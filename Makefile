dev:

	@docker-compose down && \
		docker-compose up


down:
	@docker-compose down


restart:  

	@systemctl restart docker
