ifdef ${.CURDIR}
	CURRENT_DIR = ${.CURDIR}
else
	CURRENT_DIR = ${CURDIR}
endif

all:
	@echo 'you must enter target: build-prod, build-test or build-dev'

storage-777:
	sudo chmod -R 777 ${CURRENT_DIR}/../storage
