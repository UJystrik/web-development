PROGRAM GetParameter(INPUT, OUTPUT);
USES
  Dos;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Qstring, Parameter: STRING;
  NumParameter, LengthKey: INTEGER;
BEGIN
  IF Length(Key) = 0
  THEN
    GetQueryStringParameter := 'Вы не задали параметр'
  ELSE
    BEGIN
      Qstring := GetEnv('QUERY_STRING');
      NumParameter := Pos(Key, Qstring);
      IF NumParameter = 0
      THEN
        GetQueryStringParameter := 'Заданный параметр не найден'
      ELSE
        BEGIN
          LengthKey := Length(Key);
          NumParameter := NumParameter + LengthKey;
          Delete(Qstring, 1, NumParameter);
          NumParameter := Pos('&', Qstring);
          IF NumParameter = 0
          THEN
            NumParameter := 40;
          Parameter := Copy(Qstring, 1, NumParameter - 1);
          GetQueryStringParameter := Parameter;
        END;
    END;
END;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'));
  WRITELN('Year: ', GetQueryStringParameter('year'))
END.
