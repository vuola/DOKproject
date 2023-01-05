# Excercise 3.06

## Comparison of DBaaS and Persistent Volume storage

### DBaaS:
   #### product:
        The Google product is Google Cloud SQL
   ##### pros & cons:
        required work, initialize/maintain:  
           - fully managed MySQL, PostgreSQL and SQL Server databases
           - new DB deployment with easy-to-use UI or command line
        cost, initialize/maintain:
           - complicated regional pricing consisting of CPU, memory, storage, networking and license fees
           - encryption included in package
           - global / large deployment replication made easy
           - fast response time
        backup methods, ease of use:
           - backups and replicas managed as part of service
 ### Persistent Volume storage:
   #### product:
        The Google product is standard Kubernetes persistent volume
   #### pros & cons:
        required work, initialize/maintain: 
           - requires knowledge of database containers
           - several details need attention in DB startup sequences, configuration,
           password management
           - full control of DB instance once user is accustomed to a containerized product
        cost, initialize/maintain:
           - complicated formula as part of GKE cost, storage is one price driver.
           - GKE has support for regional deployment
           - same latencies as any other GKE pods
           - solution providing shared data for multiple frontend instances may be challenging
        backup methods, ease of use:
           - backup and encryption require special attention
           - smart designer can build own logics for scaling and maintenance

