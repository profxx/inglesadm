<h1>Inglês ADM</h1>
<h3>Sistema de administração de pequenos cursos </h3>


Política de Segurança AWS
{
    "Version": "2012-10-17",
    "Id": "Policy1672969848947",
    "Statement": [
        {
            "Sid": "Stmt1672969845722",
            "Effect": "Allow",
            "Principal": "*",
            "Action": "s3:GetObject",
            "Resource": "arn:aws:s3:::inglesadm/*"
        }
    ]
}