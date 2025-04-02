function help-print -V _flag_h

  if set -q -f _flag_h

    set -f theme base16/brushtrees-dark

    set -f file (status stack-trace | tail -n 1 | string replace -r '\tcalled on line .* of file ' '' | string replace -r '^~' "/home/$USER")

    __fish_print_help (basename $file) 2> /dev/null
    or if test -n "$argv"
      echo "$argv"
    else
      fish_indent --ansi $file
    end
    exit
  end

end
