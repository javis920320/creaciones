-- Crear un job  en oracle

/**


ESTRUCTURA DE  UN JOB
DBMS_SCHEDULER.CREATE_JOB(

job_name in VARCHAR2,
job_type in VARCHAR2,
jod_action in VARCHAR2,
number_of_arguments in PLS_INTEGER DEFAULT 0,
start_date in TIMESTAMP WITH TIME ZONE DEFAULT NULL,
repeat_interval in VARCHAR2 DEFAULT null,
end_date  in TIMESTAMP WITH TIME ZONE DEFAULT NULL,
 job_class in VARCHAR2 DEFAULT 'DEFAULT_JOB_CLASS',
 enabled in BOOLEAN DEFAULT TIME,
 comments in VARCHAR2 DEFAULT NULL


);*/