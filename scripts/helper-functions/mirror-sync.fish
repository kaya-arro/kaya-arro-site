function mirror-sync -d 'An alias to mirror one directory to another with rsync. When mirroring directories, be sure to including the trailing slashes. When mirroring one file at a time, use option -f'

  argparse 'f/file' -- $argv

  set -q -f _flag_f
    and rsync --sparse --copy-links --times --perms --chmod=a+rw --size-only "$argv[1]" "$argv[2]"
    or rsync --recursive --sparse --delete-delay --copy-links --times --perms --chmod=a+rw --size-only "$argv[1]" "$argv[2]"

end
