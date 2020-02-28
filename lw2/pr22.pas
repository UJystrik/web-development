PROGRAM PrintHello(INPUT, OUTPUT);
USES
  DOS;
VAR
  NumName: INTEGER;
  Name: STRING;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF Length(GetEnv('QUERY_STRING')) = 0
  THEN
    WRITELN('Hello Anonymous')
  ELSE
    BEGIN
      Name := GetEnv('QUERY_STRING');
      NumName := Pos('name=', Name);
      IF NumName = 0
      THEN
        WRITELN('Hello Anonymous')
      ELSE
        BEGIN
          Delete(Name, 1, NumName + 4);
          NumName := Pos('&', Name);
          IF NumName = 0
          THEN
            NumName := 20;
          Name := Copy(Name, 1, NumName -1);
          WRITELN('Hello dear ', Name)
        END;
    END;
END. {PrintHello}
