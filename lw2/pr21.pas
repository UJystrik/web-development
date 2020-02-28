PROGRAM PrintHello(INPUT, OUTPUT);
USES
  DOS;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF GetEnv('QUERY_STRING') = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land')
  ELSE
    IF GetEnv('QUERY_STRING') = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea')
    ELSE
      WRITELN('Not information')
END. {PrintHello}

