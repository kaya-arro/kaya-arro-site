function err
  argparse -x r,w 'w/warn' 'r/return' -- $argv
  or err -w 'You can only pass one of the -w or -r flags to err'
  if set -q -f _flag_r
    function leave; return 1; end
  else if set -q -f _flag_w
    function leave; end
  else
    function leave; exit 1; end
  end
  echo -e "$(set_color -o brred)$argv$(set_color normal)" >&2
  leave
  functions -e leave
end
